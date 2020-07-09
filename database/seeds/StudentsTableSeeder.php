<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {
            $newStudent = new Student();
            $newStudent->name = $faker->name;
            $newStudent->surname = $faker->lastname;
            $newStudent->student_id = $faker->ean8;
            $newStudent->email = $faker->email;
            $newStudent->save();
        }
    }
}
