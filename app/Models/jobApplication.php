<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'salary_range', 'location', 'contact', 'skillset', 'about', 'availability', 'status', 'phone'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }





    //properties
    protected $table = 'job_applications';
    protected $primaryKey = 'id'; // eloquent always assumes id as default primary key
    //array that specifies which fields can be filled in from this app from the user interface

}
