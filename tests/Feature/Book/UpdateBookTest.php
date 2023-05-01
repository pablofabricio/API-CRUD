<?php

namespace Tests\Feature\Book;

use App\Models\Book;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UpdateBookTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStatus200()
    {
        $user = User::factory()->create([
            'email' => 'teste@gmail.com',
            'password' => Hash::make(1234567)
        ]);

        $book = Book::factory()->create();

        $request = [
            'name' => 'test',
            'isbn' => 12345,
            'value' => 100
        ];

        $response = $this->withHeaders([
            'Authorization' => 'Basic '.base64_encode($user->email.':'.(1234567)),
        ])->json("PUT", "api/book/".$book->id, $request);

        $response->assertStatus(200);
    }
}
