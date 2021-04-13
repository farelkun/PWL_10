<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Mahasiswa extends Model
{
    protected $table="mahasiswas";
    public $timestamps= false;
    protected $primaryKey = 'Nim';

    protected $fillable = [
        'Nim',
        'Nama',
        'Kelas',
        'Jurusan',
        'No_Handphone',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function matakuliah()
    {
        return $this->belongsToMany(MataKuliah::class, 'mahasiswa_matakuliah', 'mahasiswa_nim', 'matakuliah_id')->withPivot('nilai');
    }
}
