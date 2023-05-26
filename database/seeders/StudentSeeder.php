<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = [
            [
                'studentname' => 'Charles',
                'age' => 21,
                'yearandsection' => 'BSIT-3B'
            ]
            ];


        //make foreach to collect the data
        foreach($student as $key => $value){
            Students::create($value);
        }
    }
}
