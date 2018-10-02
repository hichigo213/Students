<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['image', 'student_id'];

    public $timestamps = false;

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
