<?php

namespace App\Observers;

use App\Models\Reply;
use Illuminate\Support\Facades\Log;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function created(Reply $reply)
    {
        // Log::info($reply);
        $reply->topic->reply_count = $reply->topic->replies->count();
        $reply->topic->save();
    }
}
