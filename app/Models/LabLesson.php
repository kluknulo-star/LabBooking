<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabLesson extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function timeLesson()
    {
        return $this->belongsTo(TimeLesson::class, 'time_lesson_id', 'id');
    }
    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class, 'cabinet_id', 'id');
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');

    }

}
