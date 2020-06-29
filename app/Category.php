<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','image'];


    //Category--> Service
   public function services()
   {
       return $this->hasMany('App\Service','category_id');    //laravel Automatically guesses FK and PK of relationship and table name
   }

    public function blogs()
    {
        return $this->hasMany('App\Blog','category_id');
    }
}
