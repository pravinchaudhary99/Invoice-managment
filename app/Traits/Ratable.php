<?php

namespace App\Traits;

use App\Models\Rating;

/**
 * Trait Commissionable
 * @package App\Traits
 */
trait Ratable
{
    /**
    * All Tags this car type has included
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */

    public function rating() {
        return $this->morphMany(Rating::class, 'ratable');
    }
}