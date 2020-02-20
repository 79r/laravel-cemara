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
                'notes'  => 'Kategori inventori alat kerja'
            ],
            [
                'name'  => 'Bahan Baku',
                'notes'  => 'Kategori inventori bahan baku'
            ],
        );
    }
}
