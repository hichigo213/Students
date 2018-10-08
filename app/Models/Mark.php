<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = ['mark','student_id', 'subject_id'];

    public $timestamps = false;

    public function students()
    {
        return $this->belongsTo(Student::class);
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class);
    }
}
