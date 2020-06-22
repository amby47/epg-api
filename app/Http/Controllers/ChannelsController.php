<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;

class ChannelsController extends Controller
{
    public function get() {
        // Get all channels here
        return Channel::all();
    }
}
