<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Timetable extends Model
{
    use Uuid;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    //

    public function programme() {
        return $this->hasOne(Programme::class);
    }
}
