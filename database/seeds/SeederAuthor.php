<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\DetailsAuthor;
use App\Post;
use App\Comment;
class SeederAuthor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            $faker->addProvider(new WW\Faker\Provider\Picture($faker));
        for($i=0; $i<12; $i++){
            $author = new Author();
            $author->name=$faker->firstName();
            $author->lastname=$faker->lastName();
            $author->mail=$faker->email();
            $author->save();

            $details = new DetailsAuthor();
            $details->pic = 'qui ci saranno i dettagli';
            $details->biography = $faker->text();
            $details->instagram = $faker->url();
            $details->twitter = $faker->url();
            $details->facebook = $faker->url();
            $details->linkedin = $faker->url();

            $author->detail()->save($details);
            for($x=0; $x < rand(2, 4); $x++){
                $post = new Post();
                $post->post_title='Title of Post';
                $post->paragraph=$faker->text();
                $author->posts()->save($post);

                for($y=0; $y < rand(0, 7); $y++ ) {
                    $comment = new Comment();
                    $comment->name=$faker->name();
                    $comment->comment_text=$faker->text();
                    $post->comments()->save($comment);
                }
            }
        }
    }
}
