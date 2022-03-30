<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('masyarakat')->insert([
            'nik' => 1234567890987654,
            'username' => 'ramamasyarakat',
            'password' => bcrypt('ramamasyarakat'),
            'nama' => 'ramamasyarakat',
            'no_telp' => 1234567890987
        ]);
    }
}
