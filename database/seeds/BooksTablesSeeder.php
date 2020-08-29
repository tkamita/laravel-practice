<?php

use Illuminate\Database\Seeder;

class BooksTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->truncate();

        $books = [
            ['name' => 'PHP Book',
             'price' => 2000,
             'author' => 'PHPER'],
            ['name' => 'Laravel Book',
             'price' => 3000,
             'author' => null],
            ['name' => 'Ruby Book',
             'price' => 2500,
             'author' => 'Rubyist']
        ];

        foreach($books as $book) {
            \App\Book::create($book);
        }
    }
}
