<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class KanyeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_web()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_api()
    {
        $response = $this->get('/api/api-keny');

        $response->assertStatus(200);
    }
}
