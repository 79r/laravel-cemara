<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {

    private $tableName = 'roles';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();

        $roles = array(
            array('name' => 'Owner', 'user_id' => 1),
            array('name' => 'Admin', 'user_id' => 2),
            array('name' => 'Tim Produksi', 'user_id' => 3)
        );

        DB::table($this->tableName)->insert($roles);
    }
}
