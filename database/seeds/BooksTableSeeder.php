<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //angelegten User aufrufen
        $user = App\User::all()->first(); //von allen Usern die es gibt, wird der erste Ausgewählt

        //new book
        $book = new \App\Book;
        $book -> title = "Die Bibel" ;
        $book -> isbn = "123456789" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "" ;
        $book -> nettoPrice = 33.33;
        $book -> bruttoPrice = 39.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('firstName', 'Lukas')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //Buch anlegen
        $book = new \App\Book;
        $book -> title = "Herr der Ringe" ;
        $book -> isbn = "123458789" ;
        $book -> subtitle = "Die Gefährten" ;
        $book -> rating = 10 ;
        $book -> description = "Erster Teil der Trilogie" ;
        $book -> nettoPrice = 16.66;
        $book -> bruttoPrice = 19.66;
        $book -> published = new DateTime();



        //User dem Buch zuweisen
        $book->user()->associate($user);//bevor Buch gespeichert wird User zuweisen!
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Tolkien')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        //Dem Buch werden alle Autoren, die angelegt sind, zugeschrieben
        $book->authors()->sync($authors);
        //Bestellung zuweisen
        //$orders = App\Order::all()->pluck("id");
        //$book->orders()->sync($orders);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Herr der Ringe" ;
        $book -> isbn = "12368789" ;
        $book -> subtitle = "Die zwei Türme" ;
        $book -> rating = 10 ;
        $book -> description = "Zweiter Teil" ;
        $book -> nettoPrice = 16.66;
        $book -> bruttoPrice = 19.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Tolkien')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Herr der Ringe" ;
        $book -> isbn = "123455589" ;
        $book -> subtitle = "Die Rückkehr des Königs" ;
        $book -> rating = 10 ;
        $book -> description = "Letzer Teil der Trilogie" ;
        $book -> nettoPrice = 16.66;
        $book -> bruttoPrice = 19.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Tolkien')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        //Bestellung zuweisen
        //$orders = App\Order::all()->pluck("id");
        //$book->orders()->sync($orders);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Harry Potter" ;
        $book -> isbn = "12366789" ;
        $book -> subtitle = "Stein der Weisen" ;
        $book -> rating = 8 ;
        $book -> description = "Harry Potter und der Stein der Weisen (britischer Originaltitel: Harry Potter and the Philosopher’s Stone, in den Vereinigten Staaten bekannt als Harry Potter and the Sorcerer’s Stone) ist der erste Band der siebenteiligen Harry-Potter-Romanreihe von Joanne K. Rowling. " ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Rowling')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Der Hobbit" ;
        $book -> isbn = "32566789" ;
        $book -> subtitle = "Eine unerwartete Reise" ;
        $book -> rating = 10 ;
        $book -> description = "Wie alles Begann!" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Tolkien')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Stolz und Vorurteil" ;
        $book -> isbn = "52366761" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der Bestseller von Jane Austen" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Austen')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Die Herren von Winterfell" ;
        $book -> isbn = "59606761" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der erste Teil der erfolgreichen Buchserie" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Das Erbe von Winterfell" ;
        $book -> isbn = "59742361" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der zweite Teil der erfolgreichen Buchserie" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Der Thron der sieben Königreiche" ;
        $book -> isbn = "59791281" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der dritte Teil der erfolgreichen Buchserie" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Die Saat des goldenen Löwen" ;
        $book -> isbn = "27631281" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der vierte Teil der erfolgreichen Buchserie" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Sturm der Schwerter" ;
        $book -> isbn = "27953181" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der fünfte Teil der erfolgreichen Buchserie" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Die Königin der Drachen" ;
        $book -> isbn = "27953331" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der sechste Teil der erfolgreichen Buchserie" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new Book
        $book = new \App\Book;
        $book -> title = "Zeit der Krähen" ;
        $book -> isbn = "34893181" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der siebte Teil der erfolgreichen Buchserie" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht

        $book->authors()->sync($authors);
        $book->save();

//new Book
        $book = new \App\Book;
        $book -> title = "Die dunkle Königin" ;
        $book -> isbn = "27953578" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der achte Teil der erfolgreichen Buchserie" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

//new book
        $book = new \App\Book;
        $book -> title = "Der Sohn des Greifen" ;
        $book -> isbn = "28953563" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der neunte Teil der erfolgreichen Buchserie" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new book
        $book = new \App\Book;
        $book -> title = "Ein Tanz mit Drachen" ;
        $book -> isbn = "23861578" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "Der zehnte Teil der erfolgreichen Buchserie" ;
        $book -> nettoPrice = 18.33;
        $book -> bruttoPrice = 21.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();

        //new book
        $book = new \App\Book;
        $book -> title = "Die Farben der Magie" ;
        $book -> isbn = "26513478" ;
        $book -> subtitle = "" ;
        $book -> rating = 10 ;
        $book -> description = "" ;
        $book -> nettoPrice = 14.16;
        $book -> bruttoPrice = 16.99;
        $book -> published = new DateTime();

        //User dem Buch zuweisen
        $book->user()->associate($user);
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren dem Buch zuweisen
        $authors = App\Author::where('lastName', 'Pratchett')->pluck("id"); //pluck = Es wird nur die ID ausgelesen, alles andere nicht
        $book->authors()->sync($authors);
        $book->save();





    }
}
