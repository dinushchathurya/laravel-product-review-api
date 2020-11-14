<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
     /* Get the identifier that will be stored in the subject claim of the JWT */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /* Return a key value array, containing any custom claims to be added to the JWT */
    public function getJWTCustomClaims()
    {
        return [];
    }
    /* Get the products user has added */

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    /* Get the reviews user has added */

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
