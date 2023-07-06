<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'status', 'salary_range', 'description', 'user_id', 'job_id'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class, 'job_id', 'id');
    }

    //properties
    protected $table = 'job_postings';
    protected $primaryKey = 'id'; // eloquent always assumes id as default primary key
    //array that specifies which fields can be filled in from this app from the user interface

}
