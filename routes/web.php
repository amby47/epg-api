<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/channels', 'ChannelsController@get');
Route::get('/channels/{channelId}/programmes/{programmeId}', 'ProgrammeController@show');
Route::get('/channels/{channelId}/{date}/{timezone}', 'TimetableController@get');
