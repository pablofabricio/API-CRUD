<?php

namespace App\Services\Book\Processors;

use App\Repositories\BookRepository;
use App\Services\Processors\AbstractStoreProcessor;

class StoreProcessor extends AbstractStoreProcessor
{
    public function __construct(BookRepository $bookRepository)
    {
        $this->repository = $bookRepository;
    }
}
