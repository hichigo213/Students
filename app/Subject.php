<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['subject_name'];

    public $timestamps = false;

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
}
