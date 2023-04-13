<?php

namespace App\Http\Controllers;

use App\Http\Resources\LabResource;
use App\Models\Discipline;
use App\Models\Lab;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function getLabs(int $discipline)
    {
        $labs = Lab::where('discipline_id', '=', $discipline)
            ->get();

        return LabResource::collection($labs)->resolve();
    }
}
