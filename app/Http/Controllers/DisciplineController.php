<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index() {
        $disciplins = Discipline::all();
        dd($disciplins);
    }
}
