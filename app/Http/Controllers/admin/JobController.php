<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job; 
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function job()
    {
        return view('admin.job.job');
    }

    public function postJob(JobRequest $request)
    {
        // Xử lý file mô tả công việc
        $filePath = $request->file('job_file')->store('job_files', 'public');

        // Định nghĩa thư mục để lưu ảnh
        $imagePath = $request->file('job_image')->store('upload/user/job', 'public');

        // Tạo bản ghi mới trong cơ sở dữ liệu
        Job::create([
            'company_name' => $request->company_name,
            'job_title' => $request->job_title,
            'job_description' => $request->job_description,
            'job_location' => $request->job_location,
            'salary' => $request->salary,
            'company_email' => $request->company_email,
            'job_file' => $filePath,
            'job_image' => $imagePath, // Lưu đường dẫn ảnh mô tả
            'posted_by' => Auth::user()->name, // Lưu tên người đăng
            'recruiter_id' => Auth::id(), // Lưu ID của nhà tuyển dụng
            'experience' => $request->experience, // Lưu kinh nghiệm
            'field' => $request->field, // Lưu lĩnh vực
            'level' => $request->level, // Lưu cấp bậc
        ]);

        return redirect()->back()->with('success', 'Thông tin tuyển dụng đã được đăng.');
    }

}
