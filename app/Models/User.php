<?php

namespace App\Models;

use App\Jobs\SendEmailJob;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        'country',
        'state_id',
        'gender',
        'hobbies',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        // 'api_token',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function post()
    {
        return $this->hasmany(Post::class);
    }



    public function country()
    {
        return $this->belongsTo(Country::class, 'country');
    }
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }


    public function sendEmailVerificationNotification()
    {
        //dispactches the job to the queue passing it this User object
         SendEmailJob::dispatch($this);
    }
   
  



}