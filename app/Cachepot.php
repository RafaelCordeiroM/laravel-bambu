<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cachepot extends Model
{
    protected $fillable = ['name','description','materials','price','dimensions','weight','image_id'];
    public function products(){
        return $this->belongsToMany(Product::class());
    } 
    public function image(){
        return $this->hasOne('App\Image','id','image_id');
    }
}
