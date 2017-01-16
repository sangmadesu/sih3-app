<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Station;

class Hardware extends Model
{
    //
    protected $table = 'hardware';

    protected $fillable = ['name'];

    public $timestamps = true;

    public function station()
    {
    	return $this->belongsTo(Station::class);
    }

}
