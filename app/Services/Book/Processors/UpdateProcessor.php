<?php

namespace App\Services\Book\Processors;

use App\Repositories\BookRepository;
use App\Services\Processors\AbstractUpdateProcessor;

class UpdateProcessor extends AbstractUpdateProcessor
{
    public function __construct(BookRepository $bookRepository)
    {
        $this->repository = $bookRepository;
    }
}
