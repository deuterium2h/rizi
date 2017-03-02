<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'address',
        'birthdate',
        'tin',
        'sss',
        'height',
        'weight',
        'bloodtype',
        'gender',
        'contact_num',
        'civil_status',
        'guardian_name',
        'guardian_address',
        'guardian_contact_num',
        'validity'
    ];
}
