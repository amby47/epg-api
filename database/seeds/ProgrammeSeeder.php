<?php

use App\Channel;
use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programmes')->insert(
            [
            'id' => '58874dc8-b4a5-11ea-b3de-0242ac130004',
            'name' => 'Test Programme',
            'description' => 'This is some description of test programme',
            'thumbnail' => 'programme_thumbnail.png',
            'start_time' => '2020-06-22T15:45:46',
            'end_time' => '2020-06-22T17:45:46',
            'channel_id' => '602c050a-b4a5-11ea-b3de-0242ac130004'
            ],
            [
                'id' => '58874dc8-b4a5-11ea-b3de-0242ac130004',
                'name' => 'Test Programme 2',
                'description' => 'This is some description of test programme 2',
                'thumbnail' => 'programme_thumbnail2.png',
                'start_time' => '2020-06-22T17:45:46',
                'end_time' => '2020-06-22T18:45:46',
                'channel_id' => '602c050a-b4a5-11ea-b3de-0242ac130004'
            ],
    );
    }
}
