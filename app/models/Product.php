<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'name',
        'image',
        'cate_id',
        'price',
        'short_desc',
        'detail',
        'star',
        'views'
    ];
    function getCateName()
    {
        $cn = Category::find($this->cate_id);
        return $cn->cate_name;
    }
}
