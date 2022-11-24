<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pakets')->insert([
            'nama' => "Paket Basic",
            'harga' => "50000",
            'durasi' => "1"
        ]);
        DB::table('pakets')->insert([
            'nama' => "Paket Middle",
            'harga' => "130000",
            'durasi' => "3"
        ]);
        DB::table('pakets')->insert([
            'nama' => "Paket Advance",
            'harga' => "250000",
            'durasi' => "6"
        ]);
    }
}
