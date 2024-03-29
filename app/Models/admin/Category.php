<?php

namespace App\Models\admin;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'image',
        'description',
        'status',
        'catelog_link',
        'slug'
    ];

    public function sub_categories(){
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
