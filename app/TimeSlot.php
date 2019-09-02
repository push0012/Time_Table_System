<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    protected $table = 'time_slots';

    protected $primaryKey = 'slot_id';

    protected $fillable = [
        'dayofweek','sizeofday','start_time','end_time'
    ];

    public $timestamps = false;

}
