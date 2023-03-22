<?php

namespace App\Http\Controllers;

use App\Http\Resources\DisciplineResource;
use App\Http\Resources\StreamResource;
use App\Http\Resources\StudentResource;
use App\Models\Stream;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function index() {
        $streams = Stream::all();
        return response()->json(StreamResource::collection($streams));
    }

    public function getStudentsByStream(Stream $stream){
        $students = $stream->students;
        return response()->json(StudentResource::collection($students));    
    }
    
    public function getDisciplinsByStream(Stream $stream){
        $disciplins = $stream->disciplins;
        return response()->json(DisciplineResource::collection($disciplins));    
    }
}
