<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder {

    private $tableName = 'profiles';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $profiles = array(
            array('role' => 'admin', 'user_id' => 1),
            array('role' => 'staff', 'user_id' => 2),
        );
        DB::table($this->tableName)->insert($profiles);
    }
}
