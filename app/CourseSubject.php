<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseSubject extends Model
{
    protected $table = 'course_subjects';

    //protected $primaryKey = 'subject_id';

    protected $fillable = [
        'course_code','subject_id','semester','notional_hours','lesson_hours','week_lesson_hours',
        'deleted','user_data'
    ];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->lesson_hours = $model->notional_hours * 0.4;
            $model->week_lesson_hours = ($model->notional_hours*0.4)/15;
        });
    }
}
