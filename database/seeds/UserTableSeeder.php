<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    /**
     * @{@inheritdoc}
     */
    public function run()
    {
        DB::table('users')->truncate();

        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('!P@ssw0rd#$')
            ],
            [
                'name' => 'laravel',
                'email' => 'laravel@example.com',
                'password' => Hash::make('P@ssw0rd#$')
            ]
        ];

        foreach ($users as $user) {
            App\User::create($user);
        }
    }

}