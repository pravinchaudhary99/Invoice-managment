<?php

namespace App\Traits;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * Trait Commentable
 * @package App\Traits
 */
trait Commentable
{
    /**
    * All Tags this car type has included
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */

    public function comments() :MorphMany{
        return $this->morphMany(Comment::class, 'commentable');
    }
}