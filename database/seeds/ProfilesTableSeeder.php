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


            
            array('user_id' => 1, 'full_name' => 'Owner'),
            array('user_id' => 2, 'full_name' => 'Admin'),
            array('user_id' => 3, 'full_name' => 'Tim Produksi')
        );
        DB::table($this->tableName)->insert($profiles);
    }
}
