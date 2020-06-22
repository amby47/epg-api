<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('programme_id');
            $table->timestamps();
        });

        Schema::table('programmes', function (Blueprint $table) {
            $table->foreign('channel_id')->references('id')->on('channels');
        });
        Schema::table('timetables', function (Blueprint $table) {
            $table->foreign('programme_id')->references('id')->on('programmes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('timetables');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
