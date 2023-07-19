<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ApplicationSubmission extends Model
{
    use HasFactory;
    protected $table = 'application_submissions';

    protected $fillable = [
        'document',
        'status'
    ];

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class, 'job_id', 'id');
    }
    public function JobApplication()
    {
        return $this->belongsTo(JobApplication::class, 'househelp_id', 'id');
    }
}
