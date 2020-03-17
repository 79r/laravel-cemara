<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JoTableSeeder extends Seeder {

    private $tableName = 'jo';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();

        $jo = array(
            'user_id'       => 2,
            'parent_id'     => 1,
            'category_id'   => 1,
            'jo_status_id'  => 1,
            'client_id'     => 1,
            'jo_code'       => 'CK00001',
            'title'         => 'Dummy JO',
            'start_date'    => Carbon::now(),
            'deadline'      => Carbon::now(),
            'material'      => 'Sample Material',
            'finishing'     => 'Sample Finishing',
            'qty'           => 1,
            'size'          => '10x10cm',
            'notes'         => 'Sample notes.'
        );

        DB::table($this->tableName)->insert($jo);
    }
}
