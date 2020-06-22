<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChannelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_should_see_all_channels_returned_as_json_format()
    {
        $this->json('GET', '/channels')
             ->assertJson([
                 [
                'id' => '602c050a-b4a5-11ea-b3de-0242ac130004',
                'name' => 'Test Channel',
                'icon' => 'testicon.png',
                'created_at' => null,
                'updated_at' => null
                ]
             ]);
    }
}
