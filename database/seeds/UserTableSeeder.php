<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name'          => 'Shams Sadek',
                'email'         => 'shamssadek@gmail.com',
                'password'      => bcrypt('123456')
            ],
            [
                'name'          => 'Talha Ekhlas',
                'email'         => 'talhs@gmail.com',
                'password'      => bcrypt('123456')
            ],
            [
                'name'          => 'Mahbub Rabbin',
                'email'         => 'mahbub@gmail.com',
                'password'      => bcrypt('123456')
            ],
            [
                'name'          => 'Nuruzzaman Milon',
                'email'         => 'milon@gmail.com',
                'password'      => bcrypt('123456')
            ]


        ]);
    }
}
