<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected  $fillable=['vendor_id','category_id','city_id','title','cover_image','publish','gallery_image','description','longitude','latitude'];
//'[gallery_image]'

    //Service --> can have only one Category
    public function category(){
        return $this->belongsTo('App\Category');
    }

    //Service --> can have only one Category
    public function city(){
        return $this->belongsTo('App\City');
    }

    //Service --> can have only one Category
    public function vendor(){
        return $this->belongsTo('App\Vendor' );
    }

    public function Amenitie(){
        return $this->hasOne('App\Amenitie');
    }
}


















