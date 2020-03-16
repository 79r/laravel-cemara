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
            array('name' => 'Owner'),
            array('name' => 'Admin'),
            array('name' => 'Tim Produksi')
        );

        DB::table($this->tableName)->insert($roles);
    }
}
