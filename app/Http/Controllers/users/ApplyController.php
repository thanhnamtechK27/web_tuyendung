<?php

namespace App\Http\Controllers\users;
use App\Http\Controllers\Controller; 
use App\Models\JobApply;
use App\Models\Job;
use App\Mail\ApplicationSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ApplyController extends Controller
{
    public function showApplicationForm($id)
    {
        $job = Job::findOrFail($id);
        return view('users.apply.apply', compact('job'));
    }

    public function submitApplication(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        $application = JobApply::create([
            'job_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'resume' => $resumePath,
        ]);

        try {
            Mail::to($request->email)->send(new ApplicationSubmitted($application));
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Không thể gửi email. Vui lòng thử lại sau.']);
        }

        return redirect()->route('job.apply', $id)->with('success', 'Đơn ứng tuyển của bạn đã được gửi!');
    }
}



