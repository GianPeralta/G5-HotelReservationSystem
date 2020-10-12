<?php

namespace Tests\Feature;

use App\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServicesFeaturesTest extends TestCase
{
    use RefreshDatabase;
    /* @test */
    public function test_a_user_can_see_all_the_services()
    {
      $services = factory(Service::class, 5)->create();
      $response = $this->get('/services');
      $response->assertStatus(200);
    }
    /* @test */
    public function test_a_user_can_see_a_single_service()
    {
        $service = factory(Service::class)->create();

        $response = $this->get('/services/'. $service->id);

        $response->assertSee($service->name);
    }
    /* @test */
    public function test_a_user_can_create_a_service()
    {

        $response = $this->get('/services/create');
        $response->assertSee('Create Service');
        $response->assertStatus(200);
    }

    /* @test */
    public function test_a_user_can_store_a_service()
    {

        $form_fields = factory(Service::class)->raw();
        $response = $this->post('/services/', $form_fields);
        $this->assertDatabaseHas('services', $form_fields);
        $response->assertRedirect(/services);
    }

    /** @test */
   public function test_a_user_can_edit_service()
   {
       $service = factory(Service::class)->create();
       $response = $this->get('/services/'.$service->id.'/edit');
       $response->assertSee('Update Service');
   }

   /** @test */
    public function test_a_user_can_update_service()
    {
        $service = factory(Service::class)->create();
        $service->name = "Housekeeping";
        $service->description = "Back-of-the-house";
        $service->guests_id = "1290783";
        $response = $this->put('/services/'.$service->id, $service->toArray());
        $this->assertDatabaseHas('services', ['id' => $service->id, 'name' => 'Housekeeping', 'description' => 'Back-of-the-house',
            'guests_id' => '1290783']);
        $response->assertRedirect('/services/'.$service->id);
    }

    /** @test */
    public function a_user_can_delete_a_service()
    {
        $service = factory(Service::class)->create();
        $response = $this->delete('/services/'.$service->id);
        $this->assertDatabaseMissing('services', ['id'=> $service->id]);
        $response->assertRedirect('/services');
    }



}
