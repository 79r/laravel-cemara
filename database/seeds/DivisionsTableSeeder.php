<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('divisions')->insert(
            [
                'name'  => 'Divisi IT',
                'notes'  => 'Nothing'
            ],
            [
                'name'  => 'Divisi Produksi',
                'notes'  => 'Nothing'
            ],
        );
    }
}
