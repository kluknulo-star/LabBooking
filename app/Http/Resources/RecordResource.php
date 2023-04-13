<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'student' => $this->student->fio,
            'group' => $this->student->group->title,
            'discipline' => $this->discipline->title,
            'day' => Carbon::parse($this->day->day)->format('d.m.y'),
            'time_lesson' => $this->timeLesson->title,
            'cabinet' => $this->cabinet->title,
            'lab' => $this->lab->title,
            'teacher' => $this->teacher->fio,
        ];
    }
}
