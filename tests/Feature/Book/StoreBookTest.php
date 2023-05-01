<?php

namespace Tests\Feature\Book;

use App\Models\Book;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class StoreBookTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStatus201()
    {
        $user = User::factory()->create([
            'email' => 'teste@gmail.com',
            'password' => Hash::make(1234567)
        ]);

        $request = [
            'name' => 'test',
            'isbn' => 12345,
            'value' => 100
        ];

        $response = $this->withHeaders([
            'Authorization' => 'Basic '.base64_encode($user->email.':'.(1234567)),
        ])->json("POST", "api/book/", $request);

        $response->assertStatus(201);
    }
}
