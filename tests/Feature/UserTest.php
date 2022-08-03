<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
        /** @test */
        public function test_is_login_user()
        {
            $response = $this->post('/login', [
                'email'    => "k.estefanyalessandra@gmail.com",
                'password' => "12345678",
            ]);
            
            $response = $this->get('/users');
    
            $response->assertStatus(200);
        }
        public function test_admin_can_create_users()
        {
            $response = $this->post('/login', [
                'email'    => "k.estefanyalessandra@gmail.com",
                'password' => "12345678",
            ]);

            $response = $this->get('/users/create');
               $response->assertStatus(200);
        }

        public function test_delete_user()
        {
            $response = $this->post('/login', [
                'email'    => "k.estefanyalessandra@gmail.com",
                'password' => "12345678",
            ]);

            $response = $this->post('/users', [
                "name" => "Estefany Alessandra",
                "email" => "k.estefanyalessandra@gmail.com",
                "email_verified_at" => now(),
                "password" => "12345678",
                "remember_token" => "yovAaRo4kv",
                "is_admin" => true
            ]);

            $response = $this->get('/users');

            $response->assertStatus(200);
        }
}             