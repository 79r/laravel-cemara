<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        /* user */
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);

        /* inventory */
        $this->call(BrandsTableSeeder::class);
        $this->call(DivisionsTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);

        /* jo */
        $this->call(ClientsTableSeeder::class);
        $this->call(JoParentsTableSeeder::class);
        $this->call(JoStatusTableSeeder::class);
        $this->call(JoCategoriesTableSeeder::class);
        $this->call(JoTableSeeder::class);
    }
}
