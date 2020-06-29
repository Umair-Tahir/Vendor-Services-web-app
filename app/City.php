<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=['name', 'image'];

    public function services(){

        return $this->hasMany('App\Service','city_id');
    }
}
