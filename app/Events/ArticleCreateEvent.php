<?php

namespace App\Events;

use App\Article;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class ArticleCreateEvent extends Event
{
    /**
    
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($article)
    {
        return $article;
    }
}
