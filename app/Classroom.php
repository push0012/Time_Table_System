<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'classrooms';

    protected $primaryKey = 'classroom_id';

    protected $fillable = [
        'classroom_name','location','student_capacity','method',
        'deleted','user_data'
    ];
}