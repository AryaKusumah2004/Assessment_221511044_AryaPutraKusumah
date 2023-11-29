<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Kasir;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kasirs')->truncate();
        DB::table('kasirs')->insert([
            [
                'KodeKasir' => '1',
                'Nama' => 'Bi een',
                'no_HP' => '085328377482'
            ]
        ]);
    }
}
