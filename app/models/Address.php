<?php

class Address extends Eloquent {
	
	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled
	protected $fillable = array('address1', 'address2');

	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
	// since the plural of fish isnt what we named our database table we have to define it
	protected $table = 'addresses';

	// DEFINE RELATIONSHIPS --------------------------------------------------
	public function user() {
		return $this->hasMany('User');
	}

}