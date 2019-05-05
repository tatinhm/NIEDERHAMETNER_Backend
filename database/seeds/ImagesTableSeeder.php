<?php

use Illuminate\Database\Seeder;
use App\Book;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = new App\Image();
        $image->title = "Bibel";
        $image->url = "https://exlibris.azureedge.net/covers/9783/7306/0273/7/9783730602737xl.jpg";
        $book = App\Book::where('isbn', '123456789');
        $image->book()->associate($book->first());
        $image->save();


        $image = new App\Image();
        $image->title = "Harry Potter und der Stein der Weisen";
        $image->url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRakLqTV-_ady5wC30V9EjmNimhaYgTU8ktl8uqo2P4p23OSVJw";
        $book = App\Book::where('isbn', '12366789');
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Der Herr der Ringe";
        $image->url = "https://exlibris.azureedge.net/covers/9783/6089/6089/1/9783608960891xl.jpg";
        $book = App\Book::where('isbn', '123458789');
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Der Herr der Ringe";
        $image->url = "https://images.lovelybooks.de/img/260x/cover.allsize.lovelybooks.de/der_herr_der_ringe-9783608932225_xxl.jpg";
        $book = App\Book::where('isbn', '12368789');
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Der Herr der Ringe";
        $image->url = "http://booksection.de/v4/bilder/herr3.jpg";
        $book = App\Book::where('isbn', '123455589');
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Der Hobbit";
        $book = App\Book::where('isbn', '32566789');
        $image->url = "https://bilder.buecher.de/produkte/28/28229/28229126n.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Der Thron der sieben Königreiche";
        $book = App\Book::where('isbn', '59791281');
        $image->url = "https://kbimages1-a.akamaihd.net/49fc7264-3d23-4a38-a292-2b62791ce711/353/569/90/False/das-lied-von-eis-und-feuer-03.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Stolz und Vorurteil";
        $book = App\Book::where('isbn', '52366761');
        $image->url = "https://assets.thalia.media/img/31933006-00-00.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Stolz und Vorurteil";
        $book = App\Book::where('isbn', '52366761');
        $image->url = "https://exlibris.azureedge.net/covers/9783/1502/0408/5/9783150204085xl.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Die Herren von Winterfell";
        $book = App\Book::where('isbn', '59606761');
        $image->url = "https://kbimages1-a.akamaihd.net/e1a1fc7f-558e-45f5-942d-5159d8b569c2/180/1000/False/das-lied-von-eis-und-feuer-01.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Das Erbe von Winterfell";
        $book = App\Book::where('isbn', '59742361');
        $image->url = "https://kbimages1-a.akamaihd.net/6bba5ac2-753d-46b8-ade3-6a7b6f140a55/180/1000/False/das-lied-von-eis-und-feuer-02.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Die Saat des goldenen Löwen";
        $book = App\Book::where('isbn', '27631281');
        $image->url = "https://kbimages1-a.akamaihd.net/ebe0e728-663c-4b6c-b537-ce10511c7893/180/1000/False/das-lied-von-eis-und-feuer-04.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Sturm der Schwerter";
        $book = App\Book::where('isbn', '27953181');
        $image->url = "https://kbimages1-a.akamaihd.net/021abda2-ee17-4c0b-ae5a-6f700672082b/180/1000/False/das-lied-von-eis-und-feuer-05.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Die Königin der Drachen";
        $book = App\Book::where('isbn', '27953331');
        $image->url = "https://kbimages1-a.akamaihd.net/67c4e225-d7f1-4d71-8068-f44361c31be5/180/1000/False/das-lied-von-eis-und-feuer-06.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Zeit der Krähen";
        $book = App\Book::where('isbn', '34893181');
        $image->url = "https://kbimages1-a.akamaihd.net/933dbd5a-b52f-4dbc-be82-828e7741b454/180/1000/False/das-lied-von-eis-und-feuer-07.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Die dunkle Königin";
        $book = App\Book::where('isbn', '27953578');
        $image->url = "https://kbimages1-a.akamaihd.net/66215c16-6551-48f9-a599-59e4f1746165/180/1000/False/das-lied-von-eis-und-feuer-08.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Der Sohn des Greifen";
        $book = App\Book::where('isbn', '28953563');
        $image->url = "https://kbimages1-a.akamaihd.net/1f1df6d5-3bcc-4a1c-bf35-851ec7d18490/180/1000/False/das-lied-von-eis-und-feuer-09.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Ein Tanz mit Drachen";
        $book = App\Book::where('isbn', '23861578');
        $image->url = "https://kbimages1-a.akamaihd.net/216f4c76-9ead-4176-8e32-49f8a1fa14e2/180/1000/False/das-lied-von-eis-und-feuer-10.jpg";
        $image->book()->associate($book->first());
        $image->save();

        $image = new App\Image();
        $image->title = "Die Farben der Magie";
        $book = App\Book::where('isbn', '26513478');
        $image->url = "https://media.hugendubel.de/shop/coverscans/233/23370042_23370042_xl.jpg";
        $image->book()->associate($book->first());
        $image->save();


    }



}
