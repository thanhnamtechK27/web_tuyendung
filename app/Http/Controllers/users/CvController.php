<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CvController extends Controller
{
    public function create()
    {
        return view('users.cv.create_cv'); // Tạo view create_cv
    }

    public function generate(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'education' => 'required|string|max:255',
            'experience' => 'required|string',
            'skills' => 'nullable|string|max:255',
            'avatar' => 'required|image'
        ]);

        // Lưu thông tin CV vào database
        Cv::create($validatedData);
        
        // Tải ảnh lên
        $avatarPath = $request->file('avatar')->store('avatars', 'public');

        // Tạo PDF
        $pdf = PDF::loadView('users.cv.pdf_cv', [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'education' => $validatedData['education'],
            'experience' => $validatedData['experience'],
            'skills' => $validatedData['skills'] ?? null,
            'avatar' => asset('storage/' . $avatarPath), // Thêm đường dẫn đến ảnh
        ]);

        // Xuất file PDF
        return $pdf->download('cv_' . strtolower(str_replace(' ', '_', $validatedData['name'])) . '.pdf');
    }
}
