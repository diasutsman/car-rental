<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{

    /**
     * A basic feature test example.
     */
    public function test_if_user_is_not_logged_in_then_redirects_to_login_page(): void
    {
        $response = $this->get('/');

        // test that the user is redirected to the login page
        $response->assertRedirect('/login');
    }

    public function test_input_invalid()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertSee('Sign in to your account');
    }
}
