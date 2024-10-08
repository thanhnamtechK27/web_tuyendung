<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\Job; // Đảm bảo đã import model Job
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // Sử dụng paginate để lấy 5 công việc mỗi trang
        $jobs = Job::paginate(3); // Thay đổi số lượng công việc trên mỗi trang tùy theo nhu cầu
        return view('users.home.home', compact('jobs')); // Truyền biến jobs vào view
    }
    public function fetchJobs(Request $request)
    {
        $jobs = Job::paginate(10); // Số lượng công việc trên mỗi trang
        if ($request->ajax()) {
            return view('users.home.jobs_list', compact('jobs'))->render();
        }
        return view('users.home.home', compact('jobs'));
    }

}
