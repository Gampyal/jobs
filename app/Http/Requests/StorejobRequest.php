<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorejobRequest extends FormRequest
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
            'fname' => 'required|min:3|max:255',
            'lname' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|password',
            'age' => 'numeric',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'job_title' => 'required',
            'job_location' => 'required',
            'job_start_date' => 'reequired|date',
            'job_end_date' => 'required|date',
            'job_salary_($)_per hour' => 'required|numeric',
            'job_hours' => 'requied|numeric|min:1|max:24'
        ];
    }
}
