<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('suppliers')->insert(
            [
                'name'      => 'Supplier 1',
                'phone'     => '123456789',
                'email'     => 'supplier1@example.com',
                'address'   => '....',
            ],
            [
                'name'      => 'Supplier 2',
                'phone'     => '123456789',
                'email'     => 'supplier2@example.com',
                'address'   => '....',
            ],
        );
    }
}
