<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tb_category';
    protected $fillable = ['category_name'];
   public function Post(){
    return $this->hasMany(Post::class);
   }
}
