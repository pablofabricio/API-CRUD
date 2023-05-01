<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    /**
     * @test
     */
    public function check_exists_model()
    {
        $this->assertTrue(class_exists('App\Models\Book'));
    }
}
