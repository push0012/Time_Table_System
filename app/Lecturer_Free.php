<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer_Free extends Model
{
    protected $table = 'lecturer_frees';

    /*protected $primaryKey = 'subject_id';*/

    protected $fillable = [
        'free_time',
        'lecturer_id'
    ];
}
