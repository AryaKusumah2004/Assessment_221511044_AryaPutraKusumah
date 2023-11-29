<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->truncate();
        DB::table('barangs')->insert([
            [
                'KodeNota' => '1',
                'KodeTenan' => '1',
                'KodeKasir' => '1',
                'TglNota' => '28',
                'JamNota' => 10.00,
                'JumlahBelanja' => 50000
                'Diskon' => 10
                'Total' => 49500
            ],
        ]);
    }
}
