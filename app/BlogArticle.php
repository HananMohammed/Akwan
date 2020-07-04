<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }

    public function category(){
        return $this->hasmany(BlogCategory::class ,'category_id');
    }
    public function categoryname (){
        return $this->belongsTo(BlogCategory::class, 'category_id');

    }
}
