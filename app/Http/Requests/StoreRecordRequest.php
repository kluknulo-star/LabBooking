<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'student_id' => 'required|integer',
            'day_id' => 'required|integer',
            'time_lesson_id' => 'required|integer',
            'cabinet_id' => 'required|integer',
            'teacher_id' => 'required|integer',
            'lab_id' => 'required|integer',
            'discipline_id' => 'required|integer',
        ];
    }
}
