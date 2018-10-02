<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $subjects = factory(App\Subject::class, 3)->create();
        factory(App\Group::class, 3)->create()->each(function (App\Group $group) use ($subjects){
            factory(App\Student::class, 2)->create([
                'group_id'=> $group->id,
            ])
                ->each(function (App\Student $student)use ($subjects){
                    $subjects->each(function ($subject) use ($student){
                       factory(App\Mark::class, 2)->create([
                           'student_id' => $student->id,
                           'subject_id' => $subject->id
                       ]);
                    });
                });
        });
    }
}
