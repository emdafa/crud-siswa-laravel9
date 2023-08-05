<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama'=>'Asep',
            'nomor_induk'=>'100',
            'alamat'=>'bandung',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('siswa')->insert([
            'nama'=>'Cecep',
            'nomor_induk'=>'101',
            'alamat'=>'cimahi',
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('siswa')->insert([
            'nama'=>'Omaga',
            'nomor_induk'=>'102',
            'alamat'=>'jakarta',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
