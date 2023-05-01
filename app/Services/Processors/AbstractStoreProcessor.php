<?php

namespace App\Services\Processors;

use Illuminate\Database\Eloquent\Model;

class AbstractStoreProcessor implements StoreProcessorInterface
{
    protected $repository;

    public function process(array $data): Model
    {
        return $this->repository->create($data);
    }
}
