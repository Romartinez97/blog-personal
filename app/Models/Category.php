<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // app/Models/Category.php
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // app/Models/Post.php
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
