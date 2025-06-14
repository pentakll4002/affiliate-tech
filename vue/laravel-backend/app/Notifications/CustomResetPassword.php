<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class CustomResetPassword extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = 'http://localhost:5173/reset-password?token=' . $this->token;

        return (new MailMessage)
            ->subject('Đặt lại mật khẩu')
            ->line('Bạn nhận được email này vì có yêu cầu đặt lại mật khẩu.')
            ->action('Đặt lại mật khẩu', $url)
            ->line('Nếu bạn không yêu cầu thì có thể bỏ qua email này.');
    }
}
