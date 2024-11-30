<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    //
    protected $primaryKey  = 'office_id';
    protected $fillable = [
        'office_address',
        'office_email',
        'office_phonenumber',
        'office_telephone',
        'fb',
        'instagram',
        'linkdln',
        'status',
    ];
}
