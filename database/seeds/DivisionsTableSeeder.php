<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DivisionsTableSeeder extends Seeder {

    private $tableName = 'divisions';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table($this->tableName)->delete();

        $divisions = array(
            array(
                'name' => 'Tanpa Divisi',
                'created_at'=> Carbon::now()
            ),
            array(
                'name' => 'Divisi IT',
                'created_at'=> Carbon::now()
            ),
            array(
                'name' => 'Divisi Produksi',
                'created_at'=> Carbon::now()
            )
        );

        DB::table($this->tableName)->insert($divisions);
    }
}
