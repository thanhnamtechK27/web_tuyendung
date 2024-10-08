<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'job_title',
        'job_description',
        'job_location',
        'salary',
        'company_email',
        'job_file',
        'job_image',
        'posted_by', // ID của người đăng
        'experience',
        'field',
        'level',
        'recruiter_id',
    ];

    public function applications()
    {
        return $this->hasMany(JobApply::class);
    }
}
