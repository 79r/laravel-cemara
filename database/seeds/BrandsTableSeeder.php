<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('brands')->insert(
            ['name'  => 'Logitech'],
            ['name'  => 'HP'],
            ['name'  => 'Xiaomi'],
            ['name'  => 'Smartfren'],
            ['name'  => 'Samsung'],
            ['name'  => 'Dell'],
            ['name'  => 'Asus'],
            ['name'  => 'Bosch'],
        );
    }
}
