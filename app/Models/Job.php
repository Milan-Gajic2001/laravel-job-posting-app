<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    //

    protected $table = 'jobs';

    protected $fillable = [
        'job_position',
        'location',
        'company',
        'description',
        'salary'
    ];


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
