<?php

namespace Tests\Feature\Book;

use App\Models\Book;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class DeleteBookTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStatus204()
    {
        $user = User::factory()->create([
            'email' => 'teste@gmail.com',
            'password' => Hash::make(1234567)
        ]);

        $book = Book::factory()->create();

        $response = $this->withHeaders([
            'Authorization' => 'Basic '.base64_encode($user->email.':'.(1234567)),
        ])->json("DELETE", "api/book/".$book->id);

        $response->assertStatus(204);
    }
}
