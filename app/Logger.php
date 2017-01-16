<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logger extends Model
{
    //
    protected $table = 'loggers';

    protected $fillabel = ['type'];

    protected $timestamps = true;
}
