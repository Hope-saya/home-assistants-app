<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'documents', 'availability', 'user_id', 'job_id'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class, 'job_id', 'id');
    }

    //properties
    protected $table = 'job_applications';
    protected $primaryKey = 'id'; // eloquent always assumes id as default primary key
    //array that specifies which fields can be filled in from this app from the user interface

}
