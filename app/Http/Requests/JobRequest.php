<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check(); // Chỉ cho phép nếu người dùng đã đăng nhập
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'job_location' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'company_email' => 'required|email|max:255',
            'job_file' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'job_image' => 'required|file|mimes:jpg,png,gif|max:2048',
            'experience' => 'nullable|string|max:255', // Thêm trường kinh nghiệm
            'field' => 'nullable|string|max:255', // Thêm trường lĩnh vực
            'level' => 'nullable|string|max:255', // Thêm trường cấp bậc
            'recruiter_id' => 'nullable|string|max:255', 

        ];
    }
}
