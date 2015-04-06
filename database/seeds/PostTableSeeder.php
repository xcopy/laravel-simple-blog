<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder {

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        DB::table('posts')->truncate();

        /** @var $faker Faker\Generator */
        $faker = Faker\Factory::create();

        $users = App\User::all();

        /** @var $user App\User */
        foreach ($users as $user) {
            $posts = [];

            for ($i = 0; $i < 2; $i++) {
                $posts[] = new App\Post([
                    'title' => $faker->sentence(6),
                    // 'slug' => ''
                    'body' => $faker->text(500)
                ]);
            }

            $user->posts()->saveMany($posts);
        }
    }

}
