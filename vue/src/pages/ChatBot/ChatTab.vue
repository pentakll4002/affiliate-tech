<template>
    <Transition
      enter-active-class="transition-all duration-300 ease-out"
      enter-from-class="opacity-0 scale-95 translate-y-4"
      enter-to-class="opacity-100 scale-100 translate-y-0"
      leave-active-class="transition-all duration-200 ease-in"
      leave-from-class="opacity-100 scale-100 translate-y-0"
      leave-to-class="opacity-0 scale-95 translate-y-4"
    >
      <div class="w-80 h-96 bg-white rounded-2xl shadow-2xl border border-gray-200 flex flex-col backdrop-blur-sm">
        <!-- Header -->
        <ChatHeader @close="$emit('close')" />
  
        <!-- Messages -->
        <div ref="messagesContainer" class="flex-1 p-4 overflow-y-auto space-y-3 scroll-smooth">
          <TransitionGroup
            name="message"
            tag="div"
            class="space-y-3"
          >
            <ChatMessage
              v-for="message in messages"
              :key="message.id"
              :message="message"
            />
          </TransitionGroup>
          
          <!-- Typing indicator -->
          <Transition
            enter-active-class="transition-all duration-300"
            enter-from-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100"
            leave-active-class="transition-all duration-200"
            leave-from-class="opacity-100 scale-100"
            leave-to-class="opacity-0 scale-95"
          >
            <div v-if="isTyping" class="flex justify-start">
              <div class="flex items-end space-x-2 max-w-xs">
                <div class="w-6 h-6 bg-gradient-to-r from-gray-400 to-gray-500 rounded-full flex items-center justify-center">
                  <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
                  </svg>
                </div>
                <div class="px-4 py-2 bg-gray-100 rounded-2xl">
                  <div class="flex space-x-1">
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-pulse"></div>
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-pulse" style="animation-delay: 0.2s"></div>
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-pulse" style="animation-delay: 0.4s"></div>
                  </div>
                </div>
              </div>
            </div>
          </Transition>
        </div>
  
        <!-- Input -->
        <ChatInput @send="handleSendMessage" />
      </div>
    </Transition>
  </template>
  
  <script setup lang="ts">
  import { ref, nextTick } from 'vue'
  import ChatHeader from './ChatHeader.vue'
  import ChatMessage from './ChatMessage.vue'
  import ChatInput from './ChatInput.vue'
  
  interface Message {
    id: number
    text: string
    sender: 'user' | 'bot'
    time: string
  }
  
  const emit = defineEmits<{
    close: []
  }>()
  
  // Reactive data
  const isTyping = ref<boolean>(false)
  const messages = ref<Message[]>([
    {
      id: 1,
      text: "Xin chào! Tôi là TECHBOT TƯ VẤN. Tôi có thể giúp bạn tư vấn về các sản phẩm công nghệ. Bạn cần hỗ trợ gì hôm nay? 😊",
      sender: "bot",
      time: "10:30"
    }
  ])
  
  const messagesContainer = ref<HTMLElement>()
  
  // Methods
  const handleSendMessage = async (messageText: string): Promise<void> => {
    const newMessage: Message = {
      id: messages.value.length + 1,
      text: messageText,
      sender: "user",
      time: new Date().toLocaleTimeString('vi-VN', { 
        hour: '2-digit', 
        minute: '2-digit' 
      })
    }
    
    messages.value.push(newMessage)
    
    await nextTick()
    scrollToBottom()
    
    isTyping.value = true
    
    setTimeout(() => {
      isTyping.value = false
      const botResponses = [
        "Cảm ơn bạn đã liên hệ! Tôi sẽ tư vấn cho bạn ngay. 🤝",
        "Đó là một câu hỏi hay về công nghệ! Để tôi tìm hiểu... 🤔",
        "Tôi hiểu nhu cầu của bạn. Bạn có muốn tôi giới thiệu thêm về sản phẩm nào khác không? 💡",
        "Rất vui được tư vấn cho bạn! Còn thông tin gì khác bạn cần biết? 😄",
        "Với ngân sách và nhu cầu này, tôi có thể đề xuất một số lựa chọn phù hợp. 💻"
      ]
      
      const botResponse: Message = {
        id: messages.value.length + 1,
        text: botResponses[Math.floor(Math.random() * botResponses.length)],
        sender: "bot",
        time: new Date().toLocaleTimeString('vi-VN', { 
          hour: '2-digit', 
          minute: '2-digit' 
        })
      }
      
      messages.value.push(botResponse)
      
      nextTick(() => {
        scrollToBottom()
      })
    }, 1500)
  }
  
  const scrollToBottom = (): void => {
    if (messagesContainer.value) {
      messagesContainer.value.scrollTop = messagesContainer.value.scrollHeight
    }
  }
  </script>
  
  <style scoped>
  /* Message animations */
  .message-enter-active {
    transition: all 0.3s ease-out;
  }
  .message-enter-from {
    opacity: 0;
    transform: translateY(10px) scale(0.95);
  }
  .message-enter-to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
  
  /* Custom scrollbar */
  .overflow-y-auto::-webkit-scrollbar {
    width: 4px;
  }
  .overflow-y-auto::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 2px;
  }
  .overflow-y-auto::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 2px;
  }
  .overflow-y-auto::-webkit-scrollbar-thumb:hover {
    background: #a1a1a1;
  }
  </style>