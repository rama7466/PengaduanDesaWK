<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('petugas')->insert([
            'username' => 'ramapetugas',
            'nama_petugas' => 'ramapetugas',
            'password' => bcrypt('ramapetugas'),
            'no_telp' => 1234567892987,
            'level' => 'petugas'
        ]);
        \DB::table('petugas')->insert([
            'username' => 'ramaadmin',
            'nama_petugas' => 'ramaadmin',
            'password' => bcrypt('ramaadmin'),
            'no_telp' => 1234567890187,
            'level' => 'admin'
        ]);
    }
}
