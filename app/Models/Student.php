<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
 'nis',
 'name',
 'gender',
 'dob',
 'address'
];
public function extracurriculars()
{
    return $this->belongsToMany(Extracurricular::class);
}

}
