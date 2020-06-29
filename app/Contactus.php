<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable=['email', 'description','title','city','team','founded'];
    protected $table = 'contactus';
}
