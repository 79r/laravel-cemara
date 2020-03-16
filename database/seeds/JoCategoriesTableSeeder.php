<?php

use Illuminate\Database\Seeder;

class JoCategoriesTableSeeder extends Seeder {

    private $tableName = 'jo_categories';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();

        $joCategories = array(
            array('name' => 'Printing'),
            array('name' => 'Laser')
        );

        DB::table($this->tableName)->insert($joCategories);
    }
}
