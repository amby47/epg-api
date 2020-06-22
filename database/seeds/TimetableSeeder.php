<?php

use App\Channel;
use App\Programme;
use App\ProgrammeInformation;
use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timetables')->insert([
            'id' => '5084378a-b4a5-11ea-b3de-0242ac130004',
            'start_time' => '2020-06-22T15:45:46',
            'end_time' => '2020-06-22T17:45:46',
            'programme_id' => '58874dc8-b4a5-11ea-b3de-0242ac130004',
        ]);
    }
}
