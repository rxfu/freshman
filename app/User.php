<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'mmbh',
	];

	protected $table = 'xkxx';

	protected $primaryKey = 'ksh';

	public $incrementing = false;

	public $timestamps = false;

	public function getAuthIdentifierName() {
		return $this->ksh;
	}

	public function getAuthPassword() {
		return $this->mmbh;
	}

	public function getRememberToken() {
		return null;
	}

	public function setRememberToken($value) {

	}

	public function getRememberTokenName() {
		return null;
	}

	public function setAttribute($key, $value) {
		if ($key != $this->getRememberTokenName()) {
			parent::setAttribute($key, $value);
		}
	}
}
