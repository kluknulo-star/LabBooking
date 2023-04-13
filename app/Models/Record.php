<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function lab()
    {
        return $this->belongsTo(Lab::class, 'lab_id', 'id');
    }

    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class, 'cabinet_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function day()
    {
        return $this->belongsTo(Day::class, 'day_id', 'id');
    }
    public function timeLesson()
    {
        return $this->belongsTo(TimeLesson::class, 'time_lesson_id', 'id');
    }
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
    public function discipline()
    {
        return $this->belongsTo(Discipline::class, 'discipline_id', 'id');
    }
}
