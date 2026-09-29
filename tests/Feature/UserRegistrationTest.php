<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserRegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_a_user_can_be_stored_in_database(): void
    {

        $userData = [
            'name' => 'Seenivasan Stark',
            'email' => 'seenivasan@example.com',
            'password' => bcrypt('secret123')
        ];

        User::create($userData);

        $this->assertDatabaseHas('users', [
            'email' => 'seenivasan@example.com'
        ]);
    }
}
