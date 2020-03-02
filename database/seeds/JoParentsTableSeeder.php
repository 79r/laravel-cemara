<?php

use Illuminate\Database\Seeder;

class JoParentsTableSeeder extends Seeder {

    private $tableName = "jo_parents";

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $jo_parents = array(
            array('name' => 'Cemara Kreatif'),
            array('name' => 'MIM')
        );  
        DB::table($this->tableName)->insert($jo_parents);
    }
}
