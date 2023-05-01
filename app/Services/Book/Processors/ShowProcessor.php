<?php

namespace App\Services\Book\Processors;

use App\Repositories\BookRepository;
use App\Services\Processors\AbstractShowProcessor;

class ShowProcessor extends AbstractShowProcessor
{
    public function __construct(BookRepository $bookRepository)
    {
        $this->repository = $bookRepository;
    }
}
