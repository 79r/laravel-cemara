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
                'name'      => 'Tidak Diketahui',
                'phone'     => '0812 3456 7899',
                'email'     => 'supplier1@example.com',
                'address'   => 'Jl. Cemara No.67, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161',
                'created_at'=> Carbon::now(),
            ),
            array(
                'name'      => 'BEC',
                'phone'     => '0812 3456 7899',
                'email'     => 'supplier1@example.com',
                'address'   => 'Jl. Cemara No.67, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161',
                'created_at'=> Carbon::now(),
            ),
            array(
                'name'      => 'Abdurahman Store',
                'phone'     => '0812 3456 7899',
                'email'     => 'supplier2@example.com',
                'address'   => 'Jl. Cemara No.67, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161',
                'created_at'=> Carbon::now(),
            )
        );

        DB::table($this->tableName)->insert($suppliers);
    }
}
