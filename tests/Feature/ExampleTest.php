<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRouteToHome()
    {
      $user = factory(User::class)->create();

      $response = $this->actingAs($user)
                       ->get('/');

      $response->assertStatus(200);
    }

    public function testRouteToBombero()
    {
      $user = factory(User::class)->create();

      $response = $this->actingAs($user)
                       ->get('/bombero');

      $response->assertStatus(200);
    }

    public function testRouteToAsistencia()
    {
      $user = factory(User::class)->create();

      $response = $this->actingAs($user)
                       ->get('/asistencia');

      $response->assertStatus(200);
    }
}
