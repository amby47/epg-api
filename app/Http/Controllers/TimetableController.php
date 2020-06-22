<?php

namespace App\Http\Controllers;

use App\Programme;
use App\Timetable;
use DateInterval;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function get($channelId, $date, $timezone) {
        $timezone = str_replace('-', '/', $timezone);
        $datetime = new DateTime($date);
        $timezone = new DateTimeZone($timezone);
        $datetime->setTimezone($timezone);
        $tomorrow = new DateTime($date);
        $tomorrow->setTime(23,59);
        $programmes = Programme::where('channel_id', '=', $channelId)->get();
        $channelTimetable = [];
        foreach ($programmes as $programme) {
            $timetables = Timetable::where('programme_id', '=', $programme->id)
            ->where('start_time', '>', $datetime)
            ->where('end_time', '<', $tomorrow)
            ->get();
            $programme = Programme::where('id', '=', $programme->id)->get()[0];
            foreach ($timetables as $timetable) {
                array_push($channelTimetable, [
                    'id' => $timetable->id,
                    'programme_name' => $programme->name,
                    'start_time' => $timetable->start_time,
                    'end_time' => $timetable->end_time,
                    'duration' => strtotime($timetable->end_time) - strtotime($timetable->start_time)
                ]);
            }
        }

        return $channelTimetable;

    }
}
