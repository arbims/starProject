<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StarSeed extends Seeder
{
    public function run(): void
    {
        $content = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";
        DB::table('stars')->insert([
            'nom' => 'Jackie',
            'prenom' => 'Chan',
            'image' => '/images/star/Jackie_Chan.jpg',
            'description' => $content,
        ]);
        DB::table('stars')->insert([
            'nom' => 'Kylian',
            'prenom' => 'Mbappe',
            'image' => '/images/star/Kylian_Mbappe.jpg',
            'description' => $content,
        ]);
        DB::table('stars')->insert([
            'nom' => 'Cristiano',
            'prenom' => 'Ronaldo',
            'image' => '/images/star/Cristiano-Ronaldo.jpg',
            'description' => $content,
        ]);
        DB::table('stars')->insert([
            'nom' => 'Robert',
            'prenom' => 'Lewandowski',
            'image' => '/images/star/Robert_Lewandowski.jpg',
            'description' => $content,
        ]);
        DB::table('stars')->insert([
            'nom' => 'Vin',
            'prenom' => 'Disiel',
            'image' => '/images/star/Vin_diesel.jpeg',
            'description' => $content,
        ]);
        DB::table('stars')->insert([
            'nom' => 'Angelina',
            'prenom' => 'Jolie',
            'image' => '/images/star/Angelina_Jolie.jpg',
            'description' => $content,
        ]);

    }

}
