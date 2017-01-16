<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HttpLog extends Model
{
    //
    protected $table = 'http_log';

    protected $fillabel = ['parameter','sender'];

    public $timestamps = true;
}
