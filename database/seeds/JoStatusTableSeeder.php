<?php

use Illuminate\Database\Seeder;

class JoStatusTableSeeder extends Seeder {

    private $tableName = "jo_status";

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $jo_status = array(
            array('name' => 'Waiting List', 'color' => '#ef8f00'),
            array('name' => 'Progress',     'color' => '#1f5aff'),
            array('name' => 'Selesai',      'color' => '#ef8f00')
        );
        DB::table($this->tableName)->insert($jo_status);
    }
}
