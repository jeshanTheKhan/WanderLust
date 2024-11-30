<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $primaryKey  = 'contract_id';
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status',
    ];
}
