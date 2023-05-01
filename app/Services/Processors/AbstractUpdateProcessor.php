<?php

namespace App\Services\Processors;

use Illuminate\Database\Eloquent\Model;

class AbstractUpdateProcessor implements UpdateProcessorInterface
{
    protected $repository;

    public function process(int $id, array $data): Model
    {
        $book = $this->repository->where('id', $id)->get();

        if ($book->isEmpty()) {
            throw new \Exception("Book not found.", 404);
        }

        return $this->repository->update($data, $id);
    }
}
