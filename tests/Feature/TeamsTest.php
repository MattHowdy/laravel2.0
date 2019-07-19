<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeamsTest extends TestCase
{
    // this trait must be used if CRUD functionalties triggered
    use RefreshDatabase;


    /** @test */  
    public function a_user_can_create_a_team()
    {
        // GIVEN I am a user who is logged in

        $this->actingAs(factory('App\User')->create());

        // WHEN they hit the endpoint /teams to create a new team, while passing the necessary data
        $this->post('/teams', [
            'name' => 'Acme'
        ]);

        //THEN there should be a new team in the database
        $this->assertDatabaseHas('teams', ['name' => 'Acme']);
    }

}
