<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    protected $table = 'time_tables';

    protected $primaryKey = 'schedule_id';

    protected $fillable = [
        'course_code', 'semester' ,'ac_year' ,'schedule','batch',
        'deleted','user_data'
    ];

    public function alreadyHas($condition)
    {
        return $this->where($condition)->exists();
    }
}
