<?php

namespace Tests\Feature;

use App\RoomType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoomTypesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_a_user_can_see_all_the_customers()
    {
        $room_types = factory(RoomType::class, 5)->create();
        $response = $this->get('/room-types');
        $response->assertStatus(200);
    }


    /** @test */
    public function a_user_can_see_a_single_room_type()
    {
        $room_type = factory(RoomType::class)->create();
        $response = $this->get('/room-types/'.$room_type->id);
        $response->assertSee($room_type->status);
    }

    /** @test */
    public function a_user_can_create_a_room_type()
    {
        $response = $this->get('/room-types/create');
        $response->assertSee('Create a new Room Type');
    }

    /** @test */
    public function a_user_can_store_a_new_room_type()
    {   
        $form_fields = factory(RoomType::class)->raw();
        $response = $this->post('/room-types', $form_fields);
        $this->assertDatabaseHas('room_types', $form_fields);
        $response->assertRedirect('/room-types');
    }

    /** @test */
    public function a_user_can_edit_a_room_type()
    {   
        $response = $this->get('/room-types/'.$room_type->id.'/edit');
        $response->assertSee('Edit Room Type');
    }

    /** @test */
    public function a_user_can_update_a_room_type()
    {   
        $form_fields = ['id' => $room_type->id, 'status' => $room_type->status, 'description' => $room_type->description];
        $response = $this->put('/room-types/'.$room_type->id, $form_fields);
        $this->assertDatabaseHas('room_types', $form_fields);
        $response->assertRedirect('/room-types'.$room_type->id);
    }

    /** @test */
    public function a_user_can_delete_a_room_type()
    {   
        $response = $this->delete('/room-types/'.$room_type->id);
        $this->assertDatabaseMissing('room_types', ['id'=> $room_type->id]);
        $response->assertRedirect('/room-types');
    }

}
