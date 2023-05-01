<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ServiceInterface
{
    public function getAll(): Collection;

    public function show(int $id): Collection;

    public function store(array $data): Model;

    public function update(int $id, array $data): Model;

    public function delete(int $id): void;
}
