<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nim' => '1941720011',
                'nama' => 'Abdulloh Aqil',
                'email' => 'aqil@gmail.com',
                'tanggal_lahir' => '2000-01-13',
                'kelas_id' => 1,
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '085648989999',
            ],
            [
                'nim' => '1941720226',
                'nama' => 'Auful Kirom',
                'email' => 'auful@gmail.com',
                'tanggal_lahir' => '2000-03-12',
                'kelas_id' => 1,
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '085787893232',
            ],
            [
                'nim' => '1941720100',
                'nama' => 'Naily',
                'email' => 'naily@gmail.com',
                'tanggal_lahir' => '2001-11-13',
                'kelas_id' => 1,
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '082654121236',
            ],
            [
                'nim' => '2041723111',
                'nama' => 'Tita Cahyani',
                'email' => 'tita@gmail.com',
                'tanggal_lahir' => '2000-12-03',
                'kelas_id' => 3,
                'jurusan' => 'Teknik Informatika',
                'no_handphone' => '082654123123',
            ],
            [
                'nim' => '1941720064',
                'nama' => 'Shelyca',
                'email' => 'shelyca@gmail.com',
                'tanggal_lahir' => '2000-06-10',
                'kelas_id' => 3,
                'jurusan' => 'Manajemen Informatika',
                'no_handphone' => '085888321123',
            ],
            [
                'nim' => '1941720134',
                'nama' => 'Rifkie Nurdian',
                'email' => 'rifkie@gmail.com',
                'tanggal_lahir' => '2000-05-23',
                'kelas_id' => 1,
                'jurusan' => 'Manajemen Informatika',
                'no_handphone' => '085888123432',
            ],
        ];
        DB::table('mahasiswas')->insert($data);
    }
}
