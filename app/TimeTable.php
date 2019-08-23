<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    protected $table = 'time_tables';

    protected $primaryKey = 'schedule_id';

    protected $fillable = [
        'course_code', 'semester' ,'ac_year' ,
        'batch','subject_id','dayofweek',
        'sizeofday','lecturer_id','classroom_id',
        'deleted','user_data'
    ];

    public function alreadyHas($condition)
    {
        return $this->where($condition)->exists();
    }
}
