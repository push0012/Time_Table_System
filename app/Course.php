<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $primaryKey = 'course_code';

    protected $fillable = [
        'course_name','section','max_no_students','course_hours','department',
        'deleted','user_data'
    ];
}