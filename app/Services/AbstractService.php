<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class AbstractService implements ServiceInterface
{
    protected $getAllProcessor;
    protected $showProcessor;
    protected $storeProcessor;
    protected $updateProcessor;
    protected $deleteProcessor;

    public function getAll(): Collection
    {
        return $this->getAllProcessor->process();
    }

    public function show($id): Collection
    {
        return $this->showProcessor->process($id);
    }

    public function store($data): Model
    {
        return $this->storeProcessor->process($data);
    }

    public function update($id, $data): Model
    {
        return $this->updateProcessor->process($id, $data);
    }

    public function delete($id): void
    {
        $this->deleteProcessor->process($id);
    }
}
