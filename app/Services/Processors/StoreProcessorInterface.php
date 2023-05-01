<?php

namespace App\Services\Processors;

use Illuminate\Database\Eloquent\Model;

interface StoreProcessorInterface
{
    public function process(array $data): Model;
}
