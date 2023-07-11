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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    public function role()

    {
        return $this->belongsTo(Role::class, 'roleId', 'id');
    }
}


//the relationships now

/*

class allUserTable extends Model
{
    use HasFactory;
    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }

    public function jobPostings()
    {
        return $this->hasMany(JobPosting::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

class Role extends Model
{
    public function users()
    {
        return $this->hasMany(user::class);
    }
}

class JobApplication extends Model
{
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class);
    }
}

class JobPosting extends Model
{
    public function user()
    {
        return $this->belongsTo(Alluser::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }
}

class Review extends Model
{
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
*/
