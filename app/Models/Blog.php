<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable =['cat_id','blog_name','blog_message','blog_picture'];
    public function blogky()
    {
      return $this->Hasone('App\Models\Blog_Category','id','cat_id');
    }
}
