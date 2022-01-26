<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
  public function testaccessAdminWithAmintRole()
  {
 $response = $this->get ;('/admin/articles' );
 $response -> assertRedirect('/');
  }
}
