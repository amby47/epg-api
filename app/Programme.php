<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Programme extends Model
{
    use Uuid;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    protected $table = 'programmes';
    //


    public function channel() {
        return $this->belongsTo(Channel::class);
    }

    public function timetable() {
        return $this->hasMany(Timetable::class);
    }
}
