<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');
    protected $guarded = array('id');
    protected $fillable = array('username', 'password', 'email', 'phone', 'name');
    public static $rules = array(
        'username' => 'required',
        'password' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'name' => 'required|min:5',
    );
    
    
    
    public function address()
    {
        return $this->hasOne('Address');
       // return $this->hasOne('Address', 'user_id', 'id');
    }
}
