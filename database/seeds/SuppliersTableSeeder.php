<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SuppliersTableSeeder extends Seeder {

    private $tableName = 'suppliers';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table($this->tableName)->delete();

        $suppliers = array(
            array(
                'name'      => 'Supplier 1',
                'phone'     => '123456789',
                'email'     => 'supplier1@example.com',
                'address'   => '....',
                'created_at'=> Carbon::now(),
            ),
            array(
                'name'      => 'Supplier 2',
                'phone'     => '123456789',
                'email'     => 'supplier2@example.com',
                'address'   => '....',
                'created_at'=> Carbon::now(),
            )
        );

        DB::table($this->tableName)->insert($suppliers);
    }
}
