<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreSubjectRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'teacher_id' => ['required', 'integer', 'exists:users,id'],
//            'slug' => ['required', 'string', 'max:255', 'unique:subjects,slug'],
        ];
    }
}
