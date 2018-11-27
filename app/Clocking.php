<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clocking extends Model
{
    protected $table = 'checkinout';

    protected $primaryKey = 'USERID';

    protected $fillable = [
        'USERID',
        'CHECKTIME',
    ];
}
