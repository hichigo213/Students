<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['group_name', 'description'];

    public $timestamps = false;

    public function students(){
        return $this->hasMany(Student::class);
    }

}
