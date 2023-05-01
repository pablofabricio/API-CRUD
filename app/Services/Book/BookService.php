<?php

namespace App\Services\Book;

use App\Services\Book\Processors\DeleteProcessor;
use App\Services\Book\Processors\GetAllProcessor;
use App\Services\Book\Processors\ShowProcessor;
use App\Services\Book\Processors\StoreProcessor;
use App\Services\Book\Processors\UpdateProcessor;
use App\Services\AbstractService;

class BookService extends AbstractService
{
    public function __construct(
        GetAllProcessor $getAllProcessor,
        ShowProcessor $showProcessor,
        StoreProcessor $storeProcessor,
        UpdateProcessor $updateProcessor,
        DeleteProcessor $deleteProcessor,
    )
    {
        $this->getAllProcessor = $getAllProcessor;
        $this->showProcessor = $showProcessor;
        $this->storeProcessor = $storeProcessor;
        $this->updateProcessor = $updateProcessor;
        $this->deleteProcessor = $deleteProcessor;
    }
}
