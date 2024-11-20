<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mhs')->insert([
            ['nim' => '22030003', 'nama' => 'Nadia', 'prodi' => 'D3TI', 'angkatan' => '2023'],
            ['nim' => '22030004', 'nama' => 'Zahra', 'prodi' => 'D3TI', 'angkatan' => '2023']
        ]);
    }
}
