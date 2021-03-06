<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\RequestNewbook;
use Auth;

class NoticeToAdminWhenUserSendNewRequestBook extends Notification
{
    use Queueable;

    protected $requireBook;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(RequestNewbook $requireBook)
    {
        $this->requireBook = $requireBook;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Request add New Book')
            ->view(
                'email.send-to-admin-when-user-create-request-book',
                [
                    'sender' => Auth::user(),
                    'requireBook' => $this->requireBook,
                ]
            );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $data = $this->requireBook->toArray();
        $data['sender'] = Auth::user()->id;
        return $data;
    }
}
