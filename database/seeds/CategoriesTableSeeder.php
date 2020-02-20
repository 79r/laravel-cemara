<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder {

    private $tableName = 'categories';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table($this->tableName)->delete();

        $categories = array(
            array(
                'name'  => 'Alat Kerja',
                'notes'  => 'Kategori inventori alat kerja',
                'created_at'=> Carbon::now(),
            ),
            array(
                'name'  => 'Bahan Baku',
                'notes'  => 'Kategori inventori bahan baku',
                'created_at'=> Carbon::now(),
            )
        );

        DB::table($this->tableName)->insert($categories);
    }
}
