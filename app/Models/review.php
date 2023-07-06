<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function alluser()
    {
        return $this->belongsTo(Alluser::class);
    }

    //properties
    protected $table = 'reviews';
    protected $primaryKey = 'id'; // eloquent always assumes id as default primary key
    //array that specifies which fields can be filled in from this app from the user interface
    protected $fillable = ['message'];
}
