<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = ['mark'];

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
