<?php

namespace App\Models;

use App\Notifications\RedefinirSenhaNotification;
<<<<<<< HEAD
=======
use App\Notifications\VerificrEmailNotification;
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

<<<<<<< HEAD
class User extends Authenticatable
=======
class User extends Authenticatable implements MustVerifyEmail
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new RedefinirSenhaNotification($token, $this->email, $this->name));
    }
<<<<<<< HEAD
=======

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerificrEmailNotification($this->name));
    }
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
}
