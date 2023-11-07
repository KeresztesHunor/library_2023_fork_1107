<?php

namespace Tests\Feature;

use Tests\TestCase;

class BookTest extends TestCase
{
    /**
    * A basic feature test example.
    */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testSimpleGet(): void
    {
        $response = $this->get('/api/books');
        $response->assertStatus(200);
    }

    public function testSimplePost(): void
    {
        $response = $this->post('/api/books');
        $response->assertStatus(200);
    }
}