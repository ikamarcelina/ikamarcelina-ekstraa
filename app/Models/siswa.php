<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas'; // atau ganti jadi 'siswa' kalau mau

    protected $fillable = ['nama'];

    public function eskul()
    {
        return $this->belongsToMany(Eskul::class, 'pendaftaran');
    }
}
