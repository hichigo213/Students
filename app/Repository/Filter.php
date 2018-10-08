<?php

namespace App\Repository;

use App\Student;
use Illuminate\Support\Facades\DB;

class Filter
{
//public function MarkAvg(Student $students, $temp) {
//    foreach ($students as $student) {
//        $temp[$student->id] = DB::table('marks')
//            ->select('subject_id', 'student_id', DB::raw('AVG(mark)as "mark"'))
//            ->where('student_id', $student->id)
//            ->groupBy('subject_id')
//            ->get();
//    }
//    endforeach
//    return $temp;
//
}
