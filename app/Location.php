<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $table = 'locations';

    protected $fillable = ['lat','lng'];

    public $timestamps = true;
}
