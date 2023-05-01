<?php

namespace Tests\Unit;

use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Container\Container;
use PHPUnit\Framework\TestCase;

class BookRepositoryTest extends TestCase
{
    /**
     * @test
     */
    public function check_exists_repository()
    {
        $this->assertTrue(class_exists('App\Repositories\BookRepository'));
    }

    /**
     * @test
     */
    public function check_model_function()
    {
        $repository = new BookRepository(new Container);

        $this->assertEquals(Book::class, $repository->model());
    }
}
