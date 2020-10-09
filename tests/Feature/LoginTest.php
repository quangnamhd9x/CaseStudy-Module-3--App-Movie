<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testViewFormLogin()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSeeText('Sign in');
        $response->assertViewIs('admin.layout.login');
    }
    public function testLogin(){
        $data = [
            'username' => "quangnamhd9x@gmail.com",
            'password' => "123456",
        ];
        $response = $this->post('/login' , $data);
        $response->assertStatus(500);
    }
}
