<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';

    protected $fillable = [
        'nama_matkul',
        'sks',
        'jam',
        'semester'
    ];

    /**
     * The roles that belong to the Mahasiswa_MataKuliah
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_matakuliah', 'matakuliah_id', 'mahasiswa_nim')->withPivot('nilai');
    }
}
