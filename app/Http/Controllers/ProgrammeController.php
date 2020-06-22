<?php

namespace App\Http\Controllers;

use App\Programme;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function show($channelId, $programmeId) {
        $programme = Programme::find($programmeId)->with('channel')->get()[0];
        return [
            'id' => $programme->id,
            'name' => $programme->name,
            'description' => $programme->description,
            'thumbnail' => $programme->thumbnail,
            'start_time' => $programme->start_time,
            'end_time' => $programme->end_time,
            'duration' => strtotime($programme->end_time) - strtotime($programme->start_time),
            'channel' => $programme->channel
        ];
    }
}
