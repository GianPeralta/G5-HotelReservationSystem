<?php

namespace Tests\Feature;

use App\RoomType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoomTypesFeatureTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_see_all_room_types()
    {
        //given
        $room_types = factory(RoomType::class)->create();
        //when
        $response = $this->get('/room-types');
        //then
        $response->assertStatus(200);
    }
    
    /** @test */
    public function a_user_can_see_a_single_room_type()
    {
        //given
        $room_type = factory(RoomType::class)->create();
        //when
        $response = $this->get('/room-types/'.$room_type->id);
        //then
        $response->assertSee($room_type->standard_rate);
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
        $room_type = factory(RoomType::class)->create();
        $response = $this->get('/room-types/'.$room_type->id.'/edit');
        $response->assertSee('Edit Room Type');
    }

    /** @test */
    public function a_user_can_update_room_type()
    {   
        $room_type = factory(RoomType::class)->create();
        $room_type->standard_rate = "1500.1500";
        $room_type->last_name = "A standard room";
        $response = $this->put('/room-types/'.$room_type->id, $room_type->toArray());
        $this->assertDatabaseHas('room_types', ['id' => $room_type->id, 'standard_rate' => '1500.1500', 'description' => 'A standard room']);
        $response->assertRedirect('/room-types/'.$room_type->id);
    }

    /** @test */
    public function a_user_can_delete_a_room_type()
    {   
        $room_type = factory(RoomType::class)->create();
        $response = $this->delete('/room-types/'.$room_type->id);
        $this->assertDeleted('room_types', ['id'=> $room_type->id]);
        $response->assertRedirect('/room-types');
    }


    


}
