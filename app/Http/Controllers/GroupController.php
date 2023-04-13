<?php

namespace App\Http\Controllers;

use App\Http\Resources\DisciplineResource;
use App\Http\Resources\GroupResource;
use App\Http\Resources\StudentResource;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index() {
        $groups = Group::all();
        return GroupResource::collection($groups)->resolve();
    }

    public function getStudentsByStream(Group $group){
        $students = $group->students;
        return response()->json(StudentResource::collection($students));
    }

    public function getDisciplinsByStream(Group $group){
        $disciplins = $group->disciplins;
        return response()->json(DisciplineResource::collection($disciplins));
    }
}
