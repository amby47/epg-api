<?php

namespace App\Repositories;

use App\Channel;

class ChannelRepository
{
    public function get_channels() {
        return Channel::all();
    }

}
