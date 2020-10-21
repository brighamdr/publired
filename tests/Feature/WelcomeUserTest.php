<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUserTest extends TestCase
{
    /** @return void */
    public function test_with_nickname()
    {
        $this->get('/saludo/brigham/stick')
        ->assertStatus(200)
        ->assertSee('Bienvenido Brigham, tu apodo es stick');
    }

    
    /** @return void */
    public function test_without_nickname()
    {
        $this->get('/saludo/Brigham')
        ->assertStatus(200)
        ->assertSee('Bienvenido Brigham');
    }
}
