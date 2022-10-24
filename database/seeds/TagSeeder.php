<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Studio', 'Architettura', 'Automobilismo', 'Scienza', 'Cucina', 'Lavoro', 'Salute', 'Sicurezza'];

        foreach($tags as $tag){
            $t = new Tag();
            $t->name = $tag;
            $t->slug = Str::slug($tag);

            $t->save();
        } 
    }
}
