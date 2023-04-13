<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LabLessonResource extends JsonResource
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
            'teacher' => TeacherResource::make($this->teacher)->resolve(),
            'time_lesson' => TimeLessonResource::make($this->timeLesson)->resolve(),
            'cabinet' => CabinetResource::make($this->cabinet)->resolve()
        ];
    }
}
