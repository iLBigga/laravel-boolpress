<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    static public function getUniqueSlug($title)
    {
        $slug_base = Str::slug($title);
        $slug = $slug_base;
        $slug_check = Post::where('slug', $slug)->first();
        $n = 1;

        while($slug_check){
            $slug = $slug_base . '-' . $n;

            $slug_check = Post::where('slug', $slug)->first();
            $n++;
        }

        return $slug;
    }
}
