<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    use HasFactory;

    protected $table = 'job_apply'; // Chỉ định tên bảng

    protected $fillable = ['job_id', 'name', 'email', 'resume'];


    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
