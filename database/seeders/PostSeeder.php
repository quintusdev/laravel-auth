<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 11; $i++) {
            $post = new Post();
            $post->title = $faker->sentences(3);
            $post->content = $faker->text(500);
            $post->slug = $faker->generateSlug($post->title);

            $post->save();
        }
    }
}
