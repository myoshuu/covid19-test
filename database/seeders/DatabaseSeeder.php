<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('covids')->insert([
            'nik' => 691238734812,
            'nama' => 'Asep',
            'alamat' => 'Jln. Pegangsaan Timur',
            'tgl_mulai_gejala' => Carbon::parse('2021-05-11'),
            'gejala' => 'batuk dan pilek',
            'hasil_antigen' => 'positif',
            'hasil_pcr' => 'positif'
        ]);
    }
}
