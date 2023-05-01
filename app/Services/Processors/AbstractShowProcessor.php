<?php

namespace App\Services\Processors;

use Illuminate\Database\Eloquent\Collection;

class AbstractShowProcessor implements ShowProcessorInterface
{
    protected $repository;

    public function process(int $id): Collection
    {
        $book = $this->repository->where('id', $id)->get();

        if ($book->isEmpty()) {
            throw new \Exception("Book not found.", 404);
        }

        return $book;
    }
}
