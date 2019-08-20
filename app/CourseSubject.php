<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseSubject extends Model
{
    protected $table = 'course_subjects';

    //protected $primaryKey = 'subject_id';

    protected $fillable = [
        'course_code','subject_id','semester','week_hours',
        'deleted','user_data'
    ];
}
