<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eskul extends Model
{
    use HasFactory;

    protected $table = 'eskuls'; // atau 'ekstrakurikuler'

    protected $fillable = ['nama'];

   public function students()
{
    return $this->belongsToMany(Student::class);
}

}
