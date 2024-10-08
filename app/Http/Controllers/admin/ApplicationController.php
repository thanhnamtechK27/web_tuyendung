<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index()
    {
        // Lấy các công việc do nhà tuyển dụng hiện tại đã đăng
        $jobs = Job::where('recruiter_id', Auth::id())->get(); // Giả sử bạn có trường 'recruiter_id'

        // Debug: Kiểm tra xem có công việc không
        if ($jobs->isEmpty()) {
            return view('admin.applications.manager_job_apply', [
                'applications' => collect(),
                'message' => 'Bạn chưa đăng công việc nào.'
            ]);
        }

        // Lấy tất cả các hồ sơ ứng tuyển cho các công việc đó
        $applications = JobApply::whereIn('job_id', $jobs->pluck('id'))->get();

        // Debug: Kiểm tra số lượng hồ sơ ứng tuyển
        if ($applications->isEmpty()) {
            return view('admin.applications.manager_job_apply', [
                'applications' => $applications,
                'message' => 'Không có hồ sơ ứng tuyển cho công việc của bạn.'
            ]);
        }

        return view('admin.applications.manager_job_apply', compact('applications'));
    }

    public function destroy($id)
    {
        // Tìm hồ sơ ứng viên theo ID
        $application = JobApply::findOrFail($id);

        // Xóa hồ sơ
        $application->delete();

        // Trả về trang quản lý hồ sơ với thông báo thành công
        return redirect()->route('job.applications')->with('success', 'Hồ sơ đã được xóa thành công.');
    }
}
