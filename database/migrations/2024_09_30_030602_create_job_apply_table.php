<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplyTable extends Migration
{
    public function up()
    {
        Schema::create('job_apply', function (Blueprint $table) {
            $table->id();
            // Khóa ngoại liên kết đến bảng jobs
            $table->foreignId('job_id')->constrained('jobs')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('resume'); // Lưu đường dẫn file CV
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_apply');
    }
}
