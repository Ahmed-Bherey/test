<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'desc' , 'price' , 'image' , 'created_by' , 'category_id'];

    public function categories(){
        return $this->belongsTo(Category::class , 'category_id' , 'id');
    }
}
