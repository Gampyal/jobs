<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    protected $fillable = [

            'fname',
            'lname',
            'email',
            'password',
            'age',
            'phone',
            'address',
            'city',
            'state',
            'country',
            'job_title',
            'job_location',
            'job_start_date',
            'job_end_date',
            'job_salary_($)_per hour',
            'job_hours'
            
    ];
}
