<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder {

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        DB::table('roles')->truncate();
        DB::table('role_user')->truncate();

        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Administrator'
            ],
            [
                'name' => 'user',
                'display_name' => 'User'
            ]
        ];

        foreach ($roles as $role) {
            App\Role::create($role);
        }
    }

}
