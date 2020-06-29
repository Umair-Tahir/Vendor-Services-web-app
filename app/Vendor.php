<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable
{

    protected $fillable=['name','user_id','phone_number','country_code','company_code','description'];

    protected $hidden=['remember_token'];

    public function services()
    {
        return $this->hasMany('App\Service','vendor_id');    //laravel Automatically guesses FK and PK of relationship and table name
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}























