<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Blog_Category extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Blog::class, 'cat_id');
    }
}
