<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisteredUsers extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function only_registered_users_can_go_to_the_home_page()
    {
        $response = $this->get('/home')
            ->assertRedirect('/login');
    }

    /** @test */
    public function registered_users_can_see_the_home_page()
    {
        $this->actingAs(factory(User::class)->create());

        $response = $this->get('/home')
            ->assertOK();
    }
}