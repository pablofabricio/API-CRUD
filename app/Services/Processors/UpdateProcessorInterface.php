<?php

namespace App\Services\Processors;

use Illuminate\Database\Eloquent\Model;

interface UpdateProcessorInterface
{
    public function process(int $id, array $data): Model;
}
