<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    protected $fillable = [
    	'id',
    	'business_name',
    	'business_address',
    	'business_owner'
    ];
}
