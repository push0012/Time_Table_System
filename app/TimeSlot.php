<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    protected $table = 'time_slots';

    protected $primaryKey = 'slot_id';

    protected $fillable = [
        'day_id','day_name','start_time','end_time',
        'deleted','user_data'
    ];
}
