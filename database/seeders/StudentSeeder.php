<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'student_no' => '2310060-1',
                'name' => 'Jonh Rogiel M. Tumanda',
                'email' => 'jonhrogielmades@gmail.com',
                'phone' => '09066544727',
                'address' => 'San Ricardo, Souther Leyte',
                'status' => 'active',
            ],
            [
                'student_no' => '2320160-2',
                'name' => 'Eva Mae Cabilic',
                'email' => 'evamaecabilic@gmail.com',
                'phone' => '09026544749',
                'address' => 'tomas Oppus, Souther Leyte',
                'status' => 'active',
            ],
        ];

        foreach ($students as $student) {
            Student::updateOrCreate(
                ['email' => $student['email']],
                $student
            );
        }
    }
}
