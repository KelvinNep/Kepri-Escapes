<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use HasFactory,Sluggable;
    protected $primaryKey = 'id';
protected $table = 'tb_post';
    protected $fillable = ['creator', 'id_category', 'post_title', 'post_content', 'slug', 'post_picture'];

    public function Category(){
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function Sluggable(): array
    {
            return [
                'slug' => [
                    'source' => 'post_title'
                ]
            ];
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function find($slug)
    {
        $posts = Post::all();
        $post = [];
        foreach ($posts as $p) {
            if($p["slug"] === $slug){
                $post = $p;
            } 
    }
    
}
}
