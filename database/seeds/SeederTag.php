<?php

use Illuminate\Database\Seeder;
use App\Tag;

class SeederTag extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creo una lista di tag
        $tagsList=[
            'sport',
            'tech',
            'cinema',
            'salute',
            'social',
            'gossip',
            'cronaca',
            'politica',
            'estero'
        ];

        //con un foresch prendo ogni singolo tag della lista per caricarli singolarmente nella tabel
        foreach($tagsList as $tagItem) {
            //istanzio un nuovo oggetto Tag
            $newTag=new Tag();
            $newTag->tag_name=$tagItem;
            $newTag->save();
        }
    }
}
