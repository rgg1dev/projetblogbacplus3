<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
  public function testaccessAdminWithGestRole()
  {
 $response = $this->get ('/admin/articles' );
 $response -> assertRedirect('/admin/login');
  }

  public function testaccessAdminWithAdminRole()
  {
      $admin=Auth::loginUsingId(1);
    $this->actingAs($admin);

 $response = $this->get('/admin/articles');
 $response->assertStatus(200);
  }
}
