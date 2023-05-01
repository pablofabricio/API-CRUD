<?php

namespace App\Services\Book\Processors;

use App\Repositories\BookRepository;
use App\Services\Processors\AbstractDeleteProcessor;

class DeleteProcessor extends AbstractDeleteProcessor
{
    public function __construct(BookRepository $bookRepository)
    {
        $this->repository = $bookRepository;
    }
}
