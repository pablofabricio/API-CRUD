<?php

namespace App\Services\Processors;

use Illuminate\Database\Eloquent\Collection;

interface ShowProcessorInterface
{
    public function process(int $id): Collection;
}
