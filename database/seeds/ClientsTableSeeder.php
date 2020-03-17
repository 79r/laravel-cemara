<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder {

    private $tableName = "clients";
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $clients = array(
            'name' => 'Dummy Client'
        );
        DB::table($this->tableName)->insert($clients);
    }
}
