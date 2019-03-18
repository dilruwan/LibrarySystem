<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = date("Y-m-d H:i:s");

        $books = [
            ['title' => 'Finnegans Wake', 'author' => 'Janes Joyce', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'Don Quixote', 'author' => 'Miguel De Cervantes', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'The Making of Americans', 'author' => 'Gertrude Stein', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'The Stranger', 'author' => 'Albert Camus', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'Pilgrims Progress', 'author' => 'John Bunyan', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'In Search of Lost Time', 'author' => 'Marcel Proust', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'Pale Fire', 'author' => 'Valdimir Nabokov', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'The Trial', 'author' => 'Franz Kafka', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'Ulysses', 'author' => 'James Joyce', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'The Name of the Rose', 'author' => 'Umberto Eco', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'The Gulag Archipelago', 'author' => 'Aleksandr Solzhenitsyn', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'The Diary of a Young Girl', 'author' => 'Anne Frank', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'Gravity\'s Rainbow', 'author' => 'Thomas Pynchon', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'One Hundred Years of Solitude', 'author' => 'Gabriel García Márquez', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'The Sound and the Fury', 'author' => 'William Faulkner', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'Confusion of Feelings', 'author' => 'Stefan Zweig', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'The Public Burning', 'author' => 'Robert Coover', 'created_at' => $time, 'updated_at' => $time],
            ['title' => 'The Joke', 'author' => 'Milan Kundera', 'created_at' => $time, 'updated_at' => $time],
        ];

        DB::table('books')->insert($books);
    }
}
