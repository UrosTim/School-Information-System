<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateReportRequest extends FormRequest
{
    /**
     * Determine if the profile is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'comment' => ['required', 'string'],
            'points' => ['required', 'integer', 'min:1', 'max:100'],
            'subject_id' => ['required', 'integer', 'exists:subjects,id'],
            'student_id' => ['required', 'integer', 'exists:users,id'],
        ];
    }
}
