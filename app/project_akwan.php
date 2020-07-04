<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project_akwan extends Model
{
    public  function user(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function category(){
        return $this->hasmany(category::class ,'id');
    }
}
