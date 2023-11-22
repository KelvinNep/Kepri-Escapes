<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryD extends Model
{
    protected $table = 'tb_categoryd';
    protected $fillable = ['category_name'];
   public function Destination(){
    return $this->hasMany(Destination::class);
   }
}
