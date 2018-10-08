<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['photo', 'student_id'];

    public $timestamps = false;

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
