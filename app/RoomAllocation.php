<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomAllocation extends Model
{
    protected $table = 'room_allocations';

    //protected $primaryKey = 'lecturer_id';

    protected $fillable = [
        'start_date','end_date','ac_year',
        'subject_id','course_code','classroom_id','slot_id'
    ];

    public $timestamps = false;
}
