<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
	// protect from mass assignment vulnerabilities
    protected $fillable = [
		'first',
		'last',
		'email',
		'phone',
		'latitude',
		'longitude',
		'linkedin',
		'portfolio'
	];
}
