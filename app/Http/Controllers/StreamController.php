<?php

namespace App\Http\Controllers;

use App\Models\Stream;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    public function index() {
        $streams = Stream::all();
        dd($streams);
    }
}
