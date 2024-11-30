<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $primaryKey  = 'booking_id';
    protected $fillable = [
        'name',
        'email',
        'day',
        'date',
        'destination',
        'person',
        'posted_by',
        'package_name',
        'status',
    ];
}
