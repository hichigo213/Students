<?php

namespace App\Models;

use http\Env\Request;
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
    public function scopeName($query)
    {
        return $query->where('name', request('name'));
    }
    public function scopeGroup($query)
    {
        return $query->where('group_id', request('group_id'));
    }
}
