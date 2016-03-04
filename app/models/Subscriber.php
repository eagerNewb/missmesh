<?php
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'subscribers';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static $rules = array(
    // 'email'=>'required'
    'email'=>'required|email|unique:subscribers'
    // 'password'=>'required|alpha_num|between:6,12|confirmed',
    // 'password_confirmation'=>'required|alpha_num|between:6,12'
    );


}

