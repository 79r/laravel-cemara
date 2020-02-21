<?php

use Illuminate\Database\Seeder;

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
            array( 'name'  => 'Tanpa Kategori' ),
            array( 'name'  => 'Alat Kerja' ),
            array( 'name'  => 'Alat Laser' ),
            array( 'name'  => 'Alat Produksi' ),
            array( 'name'  => 'ATK' ),
            array( 'name'  => 'Bahan Laser' ),
            array( 'name'  => 'Elektronik' ),
            array( 'name'  => 'Rumah Tangga' )
        );

        DB::table($this->tableName)->insert($categories);
    }
}
