<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Commentable;
use App\Traits\Ratable;

class Product extends Model
{
    use HasFactory;
    use Commentable;
    use Ratable;

    protected $guarded = [];
}
