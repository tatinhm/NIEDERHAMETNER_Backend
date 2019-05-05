<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a1 = new \App\Author();
        $a1->firstName = "Jane";
        $a1->lastName = "Austen";
        $a1->save();

        $a2 = new \App\Author();
        $a2->firstName = "J. R. R.";
        $a2->lastName = "Tolkien";
        $a2->save();

        $a3 = new \App\Author();
        $a3->firstName = "Geore R. R.";
        $a3->lastName = "Martin";
        $a3->save();

        $a4 = new \App\Author();
        $a4->firstName = "Ken";
        $a4->lastName = "Follet";
        $a4->save();

        $a5 = new \App\Author();
        $a5->firstName = "Terry";
        $a5->lastName = "Pratchett";
        $a5->save();

        $a6 = new \App\Author();
        $a6->firstName = "Stephen";
        $a6->lastName = "King";
        $a6->save();

        $a7 = new \App\Author();
        $a7->firstName = "Patzy";
        $a7->lastName = "Llaleena";
        $a7->save();

        $a7 = new \App\Author();
        $a7->firstName = "JK";
        $a7->lastName = "Rowling";
        $a7->save();

        $a8 = new \App\Author();
        $a8->firstName = "Lukas";
        $a8->lastName = "et. al";
        $a8->save();




    }
}