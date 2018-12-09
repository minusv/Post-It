<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

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
        'password', 'remember_token',
    ];

    //Function to check if the user is Admin or not. 
    //Return True if role is equal to admin. 
    public function isAdmin(){
        return $this->role === self::ADMIN_TYPE;
    }
    
    //Creating one to many relation between User and Post model
    public function posts(){
        return $this->hasMany('App\Post');
    }

}
