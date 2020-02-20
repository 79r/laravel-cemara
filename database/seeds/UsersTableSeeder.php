<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder {

    private $tableName = 'users';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        /* hapus dulu semua isi dari table users */
        DB::table($this->tableName)->delete();

        $users = array(
            array(
                'name'      => 'Admin',
                'email'     => 'admin@example.com',
                'password'  => bcrypt('secret'),
                'created_at'=> Carbon::now()
            ),
            array(
                'name'      => 'Staff',
                'email'     => 'staff@example.com',
                'password'  => bcrypt('secret'),
                'created_at'=> Carbon::now()
            )
        );

        DB::table($this->tableName)->insert($users);
    }
}
