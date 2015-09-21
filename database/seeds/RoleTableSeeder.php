<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();

        DB::table('roles')->insert([
            [
                'name'          => 'Admin',
                'label'         => 'Site Admin',
            ],
            [
                'name'          => 'Manager',
                'label'         => 'Site Manager',
            ],
            [
                'name'          => 'Accounts',
                'label'         => 'Accounts Section',
            ],
            [
                'name'          => 'Diagnostic',
                'label'         => 'Diagnostic Center',
            ],
            [
                'name'          => 'Hospital',
                'label'         => 'Hospital Section',
            ],
            [
                'name'          => 'Registration',
                'label'         => 'Registration Section',
            ]


        ]);
    }
}
