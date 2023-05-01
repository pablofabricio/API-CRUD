<?php

namespace App\Services\Processors;

interface DeleteProcessorInterface
{
    public function process(int $id): void;
}
