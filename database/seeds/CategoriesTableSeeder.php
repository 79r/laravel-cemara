<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('categories')->insert(
            [
                'name'  => 'Alat Kerja',
                'notes'  => 'Nothing'
            ],
            [
                'name'  => 'Bahan Baku',
                'notes'  => 'Nothing'
            ],
        );
    }
}
