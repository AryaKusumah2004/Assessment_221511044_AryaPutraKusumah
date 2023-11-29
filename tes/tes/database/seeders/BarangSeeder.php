<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data seeder untuk tabel Barang
        DB::table('barangs')->truncate();
        DB::table('barangs')->insert([
            [
                'KodeBarang' => '1',
                'NamaBarang' => 'Gorengan',
                'Satuan' => 'Pcs',
                'HargaSatuan' => 2000,
                'Stok' => 10,
            ],
            [
                'KodeBarang' => '2',
                'NamaBarang' => 'Minuman',
                'Satuan' => 'Pcs',
                'HargaSatuan' => 5000,
                'Stok' => 20,
            ]
        ]);

        // Tambahkan data dummy lainnya sesuai kebutuhan
    }
}
