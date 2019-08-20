<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $table = 'lecturers';

    protected $primaryKey = 'lecturer_id';

    protected $fillable = [
        'title','initial','last_name','department',
        'deleted','user_data'
    ];
}