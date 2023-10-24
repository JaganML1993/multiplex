<?php

namespace App\Models;

use App\Models\admin\Category;
use App\Models\admin\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function sub_category(){
        return $this->hasOne(SubCategory::class, 'id', 'sub_category_id');
    }
}
 