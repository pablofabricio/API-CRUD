<?php

namespace App\Services\Book\Processors;

use App\Repositories\BookRepository;
use App\Services\Processors\AbstractGetAllProcessor;

class GetAllProcessor extends AbstractGetAllProcessor
{
    public function __construct(BookRepository $bookRepository)
    {
        $this->repository = $bookRepository;
    }
}
