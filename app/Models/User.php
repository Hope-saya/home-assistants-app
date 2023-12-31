<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public function getRedirectRoute()
    {
        return match ((int)$this->role_id) {
            1 => 'dashboard',
            2 => 'homeOwner',
            3 => 'houseAssistant',
            // ...
        };
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
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

    public function roles()
    {
        return $this->belongsTo(Role::class, 'roleId', 'id');
    }

    public function chat()
    {
        return $this->hasMany(Chat::class, 'chat_id', 'id');
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class, 'user_id', 'id');
    }

    public function jobPostings()
    {
        return $this->hasMany(JobPosting::class, 'user_id', 'id');
    }

    // public function applicationSubmissions()
    // {
    //     return $this->hasMany(applicationSubmissions::class, 'jobApplication_id', 'id');
    // }
}
