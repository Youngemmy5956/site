<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_HomePage()
    {
        $response = $this->get('/');

        $response->assertSeeText('Hello world');
    }


    public function test_ContactPage()
    {
        $response = $this->get('/contact');

        $response->assertSeeText('Contact page');
    }
}
