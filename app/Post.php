<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug',
        'category_id',
        'cover',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
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

    public function getCoverPathAttribute()
    {
        return $this->cover ? Storage::disk('images')->url($this->cover) : null;
    }

    public function getDateAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }

    protected $appends = ['cover_path', 'date'];

}
