<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->truncate();

        DB::table('permissions')->insert([
            [
                'name'          => 'create_user',
                'label'         => 'You Can Create User',
            ],
            [
                'name'          => 'patient_registration',
                'label'         => 'Patient Registration',
            ],
            [
                'name'          => 'hospital_bill',
                'label'         => 'Hospital Bill',
            ],
            [
                'name'          => 'hospital_report',
                'label'         => 'Hospital Report',
            ],
            [
                'name'          => 'diagnostic_bill',
                'label'         => 'Diagnostic Bill',
            ],
            [
                'name'          => 'diagnostic_report',
                'label'         => 'Diagnostic Report',
            ],

        ]);
    }
}
