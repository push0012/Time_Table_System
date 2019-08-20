<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $primaryKey = 'subject_id';

    protected $fillable = [
        'subject_title','method','needs','credits',
        'deleted','user_data','course_code'
    ];
}