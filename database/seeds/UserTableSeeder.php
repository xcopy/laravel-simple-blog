<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder {

    /**
     * @{@inheritdoc}
     */
    public function run()
    {
        DB::table('users')->truncate();

        $roles = [];

        foreach (['user', 'admin'] as $role) {
            $roles[] = Role::where('name', '=', $role)->first();
        }

        /** @var $admin User */
        $admin = User::create([
            'name' => 'laravel',
            'email' => 'laravel@example.com',
            'password' => Hash::make('P@ssw0rd#$')
        ]);

        $admin->attachRoles($roles);

        /** @var $user User */
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('!P@ssw0rd#$')
        ]);

        $user->attachRole($roles[0]);
    }

}
