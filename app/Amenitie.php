<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenitie extends Model
{
	protected  $fillable=['service_id','price','event_planners','wifi','pet_friendly','catering_service','car_rentals','accommodations','facebook','twitter','instagram'];

    public function service()
    {
    	return $this->belongsTo('App\Service' );
    }
}
