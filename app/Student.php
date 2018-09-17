<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'birthday', 'group_id'];

    public $timestamps = false;

    public function groups()
    {
        return $this->belongsTo(Group::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class);
    }

}
