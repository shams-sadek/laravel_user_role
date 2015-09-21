<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        // $this->call(UserTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(PermissionTableSeeder::class);
         $this->call(RolePermissionTableSeeder::class);
         $this->call(RoleUserTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints

        Model::reguard();
    }
}
