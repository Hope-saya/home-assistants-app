<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Hiring extends Model
{
    use HasFactory;

    protected $fillable = [
        'document',
        'status'
    ];

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class, 'user_id', 'id');
    }
    public function JobApplication()
    {
        return $this->belongsTo(JobApplication::class, 'househelp_id', 'id');
    }
}
