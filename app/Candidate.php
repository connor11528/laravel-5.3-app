<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
	// protect from mass assignment vulnerabilities
    protected $fillable = [
		'name',
		'email',
		'phone',
		'latitude',
		'longitude',
		'street',
		'city',
		'state',
		'zip'
	];
}
