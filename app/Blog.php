<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=['title','description','image','user_id','category_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }
}
