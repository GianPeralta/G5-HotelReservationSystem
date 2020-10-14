<?php

namespace Tests\Feature;

use App\Guest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuestsFeatureTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_see_all_guests()
    {
        //given
        $guests = factory(Guest::class)->create();
        //when
        $response = $this->get('/guests');
        //then
        $response->assertStatus(200);
    }
    
    /** @test */
    public function a_user_can_see_a_single_guests()
    {
        //given
        $guest = factory(Guest::class)->create();
        //when
        $response = $this->get('/guests/'.$guest->id);
        //then
        $response->assertSee($guest->first_name.' '.$guest->last_name);
    }

    /** @test */
    public function a_user_can_create_a_guest()
    {
        $response = $this->get('/guests/create');
        $response->assertSee('Create Guests');
    }

    /** @test */
    public function a_user_can_store_a_new_guest()
    {   
        $form_fields = factory(Guest::class)->raw();
        $response = $this->post('/guests', $form_fields);
        $this->assertDatabaseHas('guests', $form_fields);
        $response->assertRedirect('/guests');
    }

    /** @test */
    public function a_user_can_edit_guest_details()
    {   
        $guest = factory(Guest::class)->create();
        $response = $this->get('/guests/'.$guest->id.'/edit');
        $response->assertSee('Update Guests');
    }

    /** @test */
    public function a_user_can_update_guest_details()
    {   
        $guest = factory(Guest::class)->create();
        $guest->first_name = "Mark";
        $guest->last_name = "Bataoski";
        $guest->contact_number = "2055456221";
        $guest->email = "email@emailmo.com"; 
        $response = $this->put('/guests/'.$guest->id, $guest->toArray());
        $this->assertDatabaseHas('guests', ['id' => $guest->id, 'first_name' => 'Mark', 'last_name' => 'Bataoski',
            'contact_number' => '2055456221', 'email' => 'email@emailmo.com']);
        $response->assertRedirect('/guests/'.$guest->id);
    }

    /** @test */
    public function a_user_can_delete_a_guest()
    {   
        $guest = factory(Guest::class)->create();
        $response = $this->delete('/guests/'.$guest->id);
        $this->assertDatabaseMissing('guests', ['id'=> $guest->id]);
        $response->assertRedirect('/guests');
    }


    


}
