<?php
namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobListController extends Controller
{
    public function job_list(Request $request)
    {
        // Lấy dữ liệu từ request
        $jobTitle = $request->input('job_title'); 
        $jobLocation = $request->input('location'); 
        $field = $request->input('field'); 
        $experience = $request->input('experience'); 
        $salary = $request->input('salary'); 
        $level = $request->input('level'); 
    
        // Khởi tạo query
        $query = Job::query();
    
        // Điều kiện tìm kiếm
        if (!empty($jobTitle)) {
            $query->where('job_title', 'LIKE', "%$jobTitle%");
        }
    
        if (!empty($jobLocation)) {
            $query->where('job_location', 'LIKE', "%$jobLocation%");
        }
    
        if (!empty($field)) {
            $query->where('field', 'LIKE', "%$field%"); 
        }
    
        if (!empty($experience)) {
            $query->where('experience', $experience); 
        }
    
        if (!empty($salary)) {
            $query->where('salary', 'LIKE', "%$salary%"); 
        }
    
        if (!empty($level)) {
            $query->where('level', $level); 
        }
    
        // Lấy danh sách công việc với phân trang
        $jobs = $query->paginate(6); // Số lượng công việc mỗi trang
    
        // Lấy thông tin người dùng
        $user = Auth::user();
    
        return view('users.job.job_list', compact('jobs', 'user'));
    }
    
    public function job_detail($id)
    {
        // Lấy thông tin công việc theo ID
        $job = Job::findOrFail($id);
    
        // Lấy tất cả công việc để hiển thị trong danh sách
        $jobs = Job::all(); // Hoặc sử dụng Job::paginate(10) nếu bạn muốn phân trang
    
        return view('users.job.job_detail', compact('job', 'jobs'));
    }
    
}
