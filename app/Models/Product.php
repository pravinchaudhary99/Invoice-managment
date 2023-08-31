<?php

namespace App\Models;

use App\Models\Variant;
use App\Traits\Ratable;
use App\Traits\Tagable;
use App\Traits\Commentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Commentable;
    use Tagable;
    use Ratable;

    protected $guarded = [];


    function variants() {
        $this->hasMany(Variant::class);
    }
    
}
