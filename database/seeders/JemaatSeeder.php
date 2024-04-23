<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JemaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jemaats')->insert([
            'nama' => 'Pedro Marcel Hutagaol',
            'umur' => '19',
            'jenisKelamin' => 'laki-laki',
            'alamat' => 'Tidak ada alamat',
        ]);
    }
}
