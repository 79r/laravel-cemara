<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BrandsTableSeeder extends Seeder {

    private $tableName = 'brands';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        /* clear dulu */
        DB::table($this->tableName)->delete();

        $brands = array(
            array(
                'name'  => 'Logitech',
                'created_at'=> Carbon::now()
            ),
            array(
                'name'  => 'Samsung',
                'created_at'=> Carbon::now()
            ),
            array(
                'name'  => 'HP',
                'created_at'=> Carbon::now()
            ),
            array(
                'name'  => 'Asus',
                'created_at'=> Carbon::now()
            ),
            array(
                'name'  => 'Dell',
                'created_at'=> Carbon::now()
            ),
            array(
                'name'  => 'Xiaomi',
                'created_at'=> Carbon::now()
            ),
            array(
                'name'  => 'Bosch',
                'created_at'=> Carbon::now()
            ),
        );

        DB::table($this->tableName)->insert($brands);
    }
}
