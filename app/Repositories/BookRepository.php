<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

use App\Models\Book;

class BookRepository extends BaseRepository
{
    public function model()
    {
        return Book::class;
    }
}
