<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    $table->id();
$table->string('nama');
$table->string('kelas');
$table->string('ekskul');
$table->timestamps();

}
