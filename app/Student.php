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

    public function photos()
    {
        return $this->hasOne(Photo::class);
    }

    public function scopeNameDesc($query)
    {
        return $query->orderBy('name','desc');
    }

    public function scopeNameAsc($query)
    {
        return $query->orderBy('name', 'asc');
    }
    public function scopeNumberAsc($query)
    {
        $query->orderBy('group_id', 'asc');
    }
    public function scopeNumberDesc($query)
    {
        $query->orderBy('group_id', 'desc');
    }
//if(request()->has('namedesc')) {
//$students = Student::NumberDesc()->paginate(2);
//}
}
