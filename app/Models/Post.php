<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function categories()
    {
        return $this->belongsTo('App\Models\Category');
    }
    protected $fillable = ['title', 'content', 'image', 'slug', 'is_published'];
}
