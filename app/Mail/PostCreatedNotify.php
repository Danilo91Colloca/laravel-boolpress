<?php

namespace App\Mail;
use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostCreatedNotify extends Mailable
{
    use Queueable, SerializesModels;

    protected $newPost;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $newPost)
    {
        //dependecy injection
        $this->newPost=$newPost;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $newPost=$this->newPost;
        return $this->view('mails.mailView', compact('newPost'));
    }
}
