<?php

namespace App\Listeners;

use App\Events\ArticleCreateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ArticleCreateListenser
{
    /**
     * Handle the event.
     *
     * @param  ArticleCreateEvent  $event
     * @return void
     */
    public function handle(ArticleCreateEvent $event)
    {
       $Article = Article::create($event);

        return $Article ;
    }
}
