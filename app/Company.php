<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
		'name',
        'city',
        'state',
        'website'
	];
}
