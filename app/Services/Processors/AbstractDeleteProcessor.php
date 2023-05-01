<?php

namespace App\Services\Processors;

class AbstractDeleteProcessor implements DeleteProcessorInterface
{
    protected $repository;

    public function process(int $id): void
    {
        $book = $this->repository->where('id', $id)->get();

        if ($book->isEmpty()) {
            throw new \Exception("Book not found.", 404);
        }

        $this->repository->delete($id);
    }
}
