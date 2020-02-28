<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SuppliersTableSeeder extends Seeder {

    private $tableName = 'inventory_suppliers';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table($this->tableName)->delete();

        $suppliers = array(
            array(
                'name'      => 'Tidak Diketahui',
                'created_at'=> Carbon::now(),
            ),
            array(
                'name'      => 'Abdurahman Store',
                'created_at'=> Carbon::now(),
            ),
            array(
                'name'      => 'Akulaku',
                'created_at'=> Carbon::now(),
            ),
            array(
                'name'      => 'BEC',
                'created_at'=> Carbon::now(),
            ),
            array(
                'name'      => 'Borma',
                'created_at'=> Carbon::now(),
            ),
            array(
                'name'      => 'Marga Cipta',
                'created_at'=> Carbon::now(),
            )
        );

        DB::table($this->tableName)->insert($suppliers);
    }
}
