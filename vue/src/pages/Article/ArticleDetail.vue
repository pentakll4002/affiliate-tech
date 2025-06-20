<template>
    <main class="max-w-7xl mx-auto p-4 bg-gray-50 min-h-screen">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Main Content Area -->
            <div class="flex-1 max-w-4xl">
                <div v-if="article" class="bg-white rounded-xl shadow-lg p-6 mb-6">
                    <img v-if="article.image_url" :src="getFullImageUrl(article.image_url)" :alt="article.title" class="w-full h-80 object-cover rounded-lg mb-6">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ article.title }}</h1>
                    <div class="flex items-center text-sm text-gray-600 mb-6">
                        <span class="font-medium">{{ article.user.name }}</span>
                        <span class="mx-2">•</span>
                        <time>{{ formatDate(new Date(article.created_at)) }}</time>
                    </div>
                    <div class="prose max-w-none mb-8" v-html="article.content"></div>

                    <!-- Like, Dislike, Comment and Share Buttons -->
                    <div class="flex items-center gap-4 mb-8 text-gray-600">
                        <button class="flex items-center gap-1 hover:text-blue-600 transition-colors">
                            <font-awesome-icon :icon="faThumbsUp" class="text-lg" />
                            <span>{{ article.likes_count || 0 }} Likes</span>
                        </button>
                        <button class="flex items-center gap-1 hover:text-red-600 transition-colors">
                            <font-awesome-icon :icon="faThumbsDown" class="text-lg" />
                            <span>0 Dislikes</span>
                        </button>
                        <button class="flex items-center gap-1 hover:text-blue-600 transition-colors" @click="scrollToComments">
                            <font-awesome-icon :icon="faComment" class="text-lg" />
                            <span>{{ comments.length }} Comments</span>
                        </button>
                        <button class="flex items-center gap-1 hover:text-purple-600 transition-colors">
                            <font-awesome-icon :icon="faShareNodes" class="text-lg" />
                            <span>Share</span>
                        </button>
                    </div>

                    <!-- Comment Section -->
                    <section id="comments-section" class="mt-8 border-t pt-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Comments</h2>
                        
                        <!-- Existing Comments -->
                        <div v-if="comments.length > 0" class="space-y-4 mb-6">
                            <div v-for="comment in comments" :key="comment.id" class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <span class="font-semibold text-gray-800">{{ comment.user.name }}</span>
                                    <span class="text-xs text-gray-500 ml-2">{{ formatDate(new Date(comment.created_at)) }}</span>
                                </div>
                                <p class="text-gray-700">{{ comment.content }}</p>
                            </div>
                        </div>
                        <div v-else class="text-gray-500 mb-6">
                            No comments yet. Be the first to comment!
                        </div>

                        <!-- Comment Form -->
                        <div class="bg-white p-6 rounded-xl shadow-sm">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Leave a Comment</h3>
                            <textarea 
                                v-model="newCommentText" 
                                placeholder="Write your comment here..."
                                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"
                                rows="4"
                            ></textarea>
                            <button 
                                @click="submitComment"
                                class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500"
                            >
                                Submit Comment
                            </button>
                        </div>
                    </section>
                </div>
                <div v-else class="text-center text-gray-600 py-10">
                    Loading article or article not found...
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="w-full lg:w-80 flex-shrink-0">
                <!-- Đã ẩn các phần mock: Quick Links, Tags phổ biến, Chủ đề nổi bật -->
                <!-- Nếu sau này có API thực tế, sẽ bổ sung lại -->
            </aside>
        </div>
    </main>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import axios from 'axios';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faThumbsUp, faThumbsDown, faComment, faShareNodes } from '@fortawesome/free-solid-svg-icons';

const API_BASE_URL = 'http://localhost:8000';

interface Article {
    id: number;
    user_id: number;
    title: string;
    content: string;
    image_url: string;
    created_at: string;
    updated_at: string;
    user: {
        name: string;
    };
    likes_count?: number;
}

interface Comment {
    id: number;
    user_id: number;
    article_id: number;
    content: string;
    created_at: string;
    user: {
        name: string;
    };
}

const article = ref<Article | null>(null);
const comments = ref<Comment[]>([]);
const newCommentText = ref('');
const route = useRoute();

const fetchArticle = async () => {
    try {
        const articleId = route.params.id;
        const articleResponse = await axios.get(`${API_BASE_URL}/api/articles/${articleId}`);
        article.value = articleResponse.data;
        fetchComments(articleId);
    } catch (error) {
        console.error('Error fetching article:', error);
        article.value = null;
    }
};

const fetchComments = async (articleId: string | string[]) => {
    try {
        const commentsResponse = await axios.get(`${API_BASE_URL}/api/articles/${articleId}/comments`);
        comments.value = commentsResponse.data;
    } catch (error) {
        console.error('Error fetching comments:', error);
    }
};

const submitComment = async () => {
    if (newCommentText.value.trim() === '') return;

    try {
        const articleId = route.params.id;
        const response = await axios.post(`${API_BASE_URL}/api/articles/${articleId}/comments`, {
            content: newCommentText.value.trim(),
        });
        comments.value.push(response.data.comment); // Add new comment to the list
        newCommentText.value = '';
    } catch (error) {
        console.error('Error submitting comment:', error);
        alert('Failed to submit comment. Please log in or try again.');
    }
};

const getFullImageUrl = (url: string | null) => {
    if (!url) return '';
    if (url.startsWith('http')) return url;
    return `${API_BASE_URL}${url}`;
};

const formatDate = (date: Date): string => {
    return new Intl.DateTimeFormat('vi-VN', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric'
    }).format(date);
};

const scrollToComments = () => {
    const commentsSection = document.getElementById('comments-section');
    if (commentsSection) {
        commentsSection.scrollIntoView({ behavior: 'smooth' });
    }
};
</script>

<style scoped>
.prose {
    font-size: 1.125rem;
    line-height: 1.75rem;
}

.prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
    font-weight: 700;
    margin-top: 1.5em;
    margin-bottom: 0.5em;
}

.prose p {
    margin-bottom: 1em;
}

.prose ul, .prose ol {
    margin-bottom: 1em;
    padding-left: 1.5em;
}

.prose li {
    margin-bottom: 0.5em;
}

.prose a {
    color: #3b82f6;
    text-decoration: underline;
}

.prose img {
    max-width: 100%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border-radius: 0.5rem;
}

.prose pre {
    background-color: #f3f4f6;
    padding: 1em;
    border-radius: 0.5rem;
    overflow-x: auto;
}
</style>