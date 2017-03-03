<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    protected $fillable = [
    	'business_name',
    	'business_type',
    	'business_address',
    	'payment',
    	'business_owner',
    	'validity'
    ];
}
