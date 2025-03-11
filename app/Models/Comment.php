<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{

    public function commentable()
    {
        return $this->morphTo();
    }

    // Relation to the replies (nested comments)
    public function replies()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function loadReplies()
    {
        $this->load(['replies' => function ($query) {
            $query->with('replies'); // Load replies of replies recursively
        }]);

        // For each reply, load its replies (this is recursive)
        $this->replies->each(function ($reply) {
            $reply->loadReplies();
        });

        return $this;
    }

    public function children(): HasMany
    {
        return $this->hasMany(Comment::class, 'commentable_id', 'id')
            ->where('commentable_type', 'App\\Models\\Comment');
    }
}
