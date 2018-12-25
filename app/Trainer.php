<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    //
    protected $fillable= ['nombre','avatar','slug'];
    
    public function getRouteKeyName(){
        return 'slug';
    }
}
