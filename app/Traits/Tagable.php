<?php

namespace App\Traits;

use App\Models\Tag;

trait Tagable
{
    /**
     * All Tags this car type has included
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->morphMany(Tag::class, 'tagable');
    }
}