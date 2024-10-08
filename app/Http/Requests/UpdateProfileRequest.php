<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Có thể thay đổi nếu cần kiểm tra quyền
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'sdt' => 'nullable|string|max:15',
            'location' => 'nullable|string|max:255', 
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên là bắt buộc.',
            'email.required' => 'Email là bắt buộc.',
            'phone.required' => 'Số điện thoại là bắt buộc.',
            'address.required' => 'Địa chỉ là bắt buộc.',
            'profile_picture.image' => 'File tải lên phải là ảnh.',
            'profile_picture.mimes' => 'Chỉ hỗ trợ định dạng jpg, jpeg, png.',
            'profile_picture.max' => 'Ảnh không được lớn hơn 2MB.',
        ];
    }
}
