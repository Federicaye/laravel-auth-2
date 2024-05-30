<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = config('db.posts');
        foreach ($posts as $post) {
            $new_post = new Post();
            $new_post->title = $post['title'];
            $new_post->slug = $post['slug'];
            $new_post->content = $post['content'];
            $new_post->save();
        }
    }
}
