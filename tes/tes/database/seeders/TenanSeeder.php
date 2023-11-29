<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tenan;

class TenanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tenans')->truncate();
        DB::table('tenans')->insert([
            [
                'KodeTenan' => '1',
                'NamaTenan' => 'Cireng Jebred',
                'no_HP' => '085328377482'
            ]
        ]);
    }
}
