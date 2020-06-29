<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable=['first_name','last_name','email','username','image','password','role'];

    protected $hidden=['remember_token'];


    public function vendor(){
        return $this->hasOne(Vendor::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
