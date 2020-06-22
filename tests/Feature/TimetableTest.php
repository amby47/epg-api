<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TimetableTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_should_return_timetable_for_the_channel()
    {
        $this->json('GET', '/channels/602c050a-b4a5-11ea-b3de-0242ac130004/22-06-2020/Europe-London')
             ->assertJson([
                 [
                    'id' => '5084378a-b4a5-11ea-b3de-0242ac130004',
                    'programme_name' => 'Test Programme',
                    'start_time' => '2020-06-22 15:45:46',
                    'end_time' => '2020-06-22 17:45:46',
                    'duration' => 7200
                ]
             ]);
    }
}
