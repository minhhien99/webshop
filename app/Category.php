<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $table = "categories"; //tùy chỉnh tên bảng trong csdl

    //định nghĩa relationship
    public function parent()
    {
        return $this->belongsTo("App\Category", "parent_id");
    }
    // định nghĩa relationships 1 nhiều
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
