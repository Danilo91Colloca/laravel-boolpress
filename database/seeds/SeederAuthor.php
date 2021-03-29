<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\DetailsAuthor;
use App\Post;
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

        $author = new Author();
        $author->name='ciccio';
        $author->lastname='pinco';
        $author->mail='ciccio@pinco';
        $author->save();

        $details = new DetailsAuthor();
        $details->pic = 'qui ci saranno i dettagli';
        $details->biography = 'qui ci saranno i dettagli';
        $details->instagram = 'qui ci saranno i dettagli';
        $details->twitter = 'qui ci saranno i dettagli';
        $details->facebook = 'qui ci saranno i dettagli';
        $details->linkedin = 'qui ci saranno i dettagli';

        $author->detail()->save($details);

        $post = new Post();
        $post->post_title='qui ci sara il titolo post';
        $post->paragraph='qui ci sara blablbalbaldksdjfklajlsdogldfkgjv gdhjkals jadhfg djklsa ldkja s';
        $author->posts()->save($post);
    }
}
