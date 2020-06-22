<?php

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insert([
            'id' => '602c050a-b4a5-11ea-b3de-0242ac130004',
            'name' => 'Test Channel',
            'icon' => 'testicon.png'
        ]);
    }
}
