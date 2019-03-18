<?php

namespace App\Modules;

use App\Book;
use App\Http\Resources\Book as BookResource;
use DB;

class BookModule
{
    /**
    * Returns book list
    */
    public function list()
    {
        try {
            $books = DB::table('books')->get();
            return BookResource::collection($books);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            return [];
        }
    }
}