<?php

namespace App\Services\Processors;

use Illuminate\Database\Eloquent\Collection;

interface GetAllProcessorInterface
{
    public function process(): Collection;
}
