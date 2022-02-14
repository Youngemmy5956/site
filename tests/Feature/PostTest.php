<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_BlogPostInDataBase()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    public function test_StoreVlaid()
    {
        $params = [
            'title' => 'Test Title',
            'content' => 'At least 10 characters',
            'session' => 'status',


    ];
        $response = $this->get('/posts',$params);

        $response->assertStatus(200);
    }


    // public function test_StoreFail()
    // {
    //     $params = [
    //         'title' => 'x',
    //         'content' => 'x',
    //         'session' => 'x',

    // ];
    //     $response = $this->get('/posts',$params);

    //     $response->assertStatus(200);

    //     $response->assertSessionHas('errors');

    //     $messages = session('errors')->getMessages();
    // }
}
