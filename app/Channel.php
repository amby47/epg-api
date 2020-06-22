<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Channel extends Model
{
    use Uuid;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    public function programmes()
    {
        return $this->hasMany('App\ProgrammeInformation', 'channel_id');
    }
}
