<?php

namespace App\Http\Controllers;

use App\Http\Resources\DayResource;
use App\Http\Resources\LabLessonResource;
use App\Models\Cabinet;
use App\Models\Day;
use App\Models\LabLesson;
use App\Models\Record;
use App\Models\ScheduleGroup;
use App\Models\Student;
use App\Models\TimeLesson;

class DayController extends Controller
{
    public function index()
    {
        $days = Day::all();
        return DayResource::collection($days)->resolve();
    }

    public function labLessons(int $day)
    {
        $labLessons = LabLesson::where('day_id', '=', $day)->get();
        return LabLessonResource::collection($labLessons)->resolve();
    }

    public function checkFree(Day $day, TimeLesson $timeLesson, Student $student, Cabinet $cabinet)
    {
        //есть пары в этот день
        $subjectInTimeLessonStudent = ScheduleGroup::where('group_id', '=', $student->group->id)
            ->where('day_id', '=', $day->id)
            ->where('time_lesson_id', '=', $timeLesson->id)
            ->get()
            ->toArray();
        if (count($subjectInTimeLessonStudent) !== 0) {
            return response()->json([
                'error' => 'Вы не можете записаться. В выбранное время у вас проходят занятие (' .
                    $subjectInTimeLessonStudent[0]['title'] . ')',
            ]);
        }

        //нет свободных мест в этот день
        $recordsOnThisDayTime = Record::query()
            ->with(['cabinet', 'lab'])
            ->where('day_id', '=', $day->id)
            ->where('time_lesson_id', '=', $timeLesson->id)
            ->where('cabinet_id', '=', $cabinet->id)
            ->get();

        $busyRouters = 0;
        $busySwitches = 0;
        foreach ($recordsOnThisDayTime as $record) {
            $busyRouters += $record->lab->routers;
            $busySwitches += $record->lab->switches;
        }

        $freeSeats = $cabinet->num_seat - count($recordsOnThisDayTime->toArray());
        $freeRouters = $cabinet->routers - $busyRouters;
        $freeSwitches = $cabinet->switches - $busySwitches;

        $freeSeats = $freeSeats < 0 ? 0 : $freeSeats;
        $freeRouters = $freeRouters < 0 ? 0 : $freeRouters;
        $freeSwitches = $freeSwitches < 0 ? 0 : $freeSwitches;

        if (!($freeRouters || $freeSwitches)) {
            return response()->json([
                'error' => 'Нет свободных мест',
            ]);
        }

        //Уже записан в этот день
        $alreadyRecorded= Record::query()
            ->with(['cabinet', 'lab'])
            ->where('day_id', '=', $day->id)
            ->where('student_id', '=', $student->id)
            ->where('time_lesson_id', '=', $timeLesson->id)
            ->where('cabinet_id', '=', $cabinet->id)
            ->get()
            ->toArray();

        if (count($alreadyRecorded)) {
            return response()->json([
                'error' => 'Вы уже записаны',
            ]);
        }


        return response()->json([
            'free_seats' => $freeSeats,
            'free_routers' => $freeRouters,
            'free_switches' => $freeSwitches,
        ]);
    }
}
