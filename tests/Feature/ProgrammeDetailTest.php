<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProgrammeDetailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_should_get_programme_details_using_the_channel_and_programme_id()
    {
        $this->json('GET', '/channels/602c050a-b4a5-11ea-b3de-0242ac130004/programmes/58874dc8-b4a5-11ea-b3de-0242ac130004')
             ->assertJson([
                    'id' => '58874dc8-b4a5-11ea-b3de-0242ac130004',
                    'name' => 'Test Programme',
                    'description' => 'This is some description of test programme',
                    'thumbnail' => 'programme_thumbnail.png',
                    'start_time' => '2020-06-22 15:45:46',
                    'end_time' => '2020-06-22 17:45:46',
                    'duration' => 7200,
                    'channel' => [
                        'id' => '602c050a-b4a5-11ea-b3de-0242ac130004',
                        'name' => 'Test Channel',
                        'icon' => 'testicon.png',
                        'created_at' => null,
                        'updated_at' => null
                    ]
             ]);
    }
}
