<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $post = new Post();
            $post->title = $faker->sentence();
            $post->content = $faker->paragraph(rand(20, 25), false);
            $post->slug = Post::generatePostSlugFromTitle($post->title);
            $post->save();
        }
    }
}
