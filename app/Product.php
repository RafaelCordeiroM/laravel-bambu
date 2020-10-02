<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['bambu_id','cachepot_id','image_id'];

    public function bambu(){
        return $this->hasOne('App\Bambu','id','bambu_id');
    }
    public function cachepot(){
        return $this->hasOne('App\Cachepot','id','cachepot_id');
    }
    public function image(){
        return $this->hasOne('App\Image','id','image_id');
    }
}
