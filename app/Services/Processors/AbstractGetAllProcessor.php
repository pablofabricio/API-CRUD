<?php

namespace App\Services\Processors;

use Illuminate\Database\Eloquent\Collection;

class AbstractGetAllProcessor implements GetAllProcessorInterface
{
    protected $repository;

    public function process(): Collection
    {
        return $this->repository->all();
    }
}
