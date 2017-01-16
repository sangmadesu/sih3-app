<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Hardware;

class Station extends Model
{
    //
    protected $table = 'stations';

    protected $fillable = ['name'];

    public $timestamps = true;

    public function hardware()
    {
    	return $this->hasOne(Hardware::class);
    }
}
