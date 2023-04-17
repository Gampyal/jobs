<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $JobStartDate = Carbon::now()->subDays(rand(1, 365 * 3));

        Job::Create([


            'fname' => Str::random(3),
            'lname' => Str::random(3),
            'email' => Str::random(3).'@gmail.com',
            'password' => bcrypt('password'),
            'age' => random_int(18,99),
            'phone' => random_int(1000000000, 9999999999),
            'address' => Str::random(3),
            'city' => Str::random(3),
            'state' => Str::random(3),
            'country' => Str::random(3),
            'job_title' => Str::random(3),
            'job_location' => Str::random(3),
            'job_start_date' => $JobStartDate,
            'job_end_date' => $JobStartDate->copy()->addDays(rand(1, 365 * 2)),
            'job_salary_($)_per hour' => random_int(1,999),
            'job_hours' => random_int(1,24),


        ]);
    }
}
