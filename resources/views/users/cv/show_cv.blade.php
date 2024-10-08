@extends('users.layouts.main')

@section('content')
<main>
    <div class="container mt-5">
        <h4 class="mb-4 text-center text-dark font-weight-bold">CV CỦA BẠN</h4>
        
        <div class="card shadow p-4 rounded bg-light">
            <h5 class="font-weight-bold">{{ $validatedData['name'] }}</h5>
            <p>Email: {{ $validatedData['email'] }}</p>
            <p>Điện thoại: {{ $validatedData['phone'] }}</p>
            <p>Trình độ học vấn: {{ $validatedData['education'] }}</p>
            <h6>Kinh nghiệm làm việc:</h6>
            <p>{{ $validatedData['experience'] }}</p>
            @if($validatedData['skills'])
                <h6>Kỹ năng:</h6>
                <p>{{ $validatedData['skills'] }}</p>
            @endif

            <form action="{{ route('download_cv') }}" method="POST" style="margin-top: 20px;">
                @csrf
                <input type="hidden" name="name" value="{{ $validatedData['name'] }}">
                <input type="hidden" name="email" value="{{ $validatedData['email'] }}">
                <input type="hidden" name="phone" value="{{ $validatedData['phone'] }}">
                <input type="hidden" name="education" value="{{ $validatedData['education'] }}">
                <input type="hidden" name="experience" value="{{ $validatedData['experience'] }}">
                <input type="hidden" name="skills" value="{{ $validatedData['skills'] ?? '' }}">
                <button type="submit" class="btn btn-primary">Tải về CV (Word)</button>
            </form>
        </div>
    </div>
</main>

<style>
    .bg-light {
        background-color: #f9f9f9 !important;
    }
    .card {
        border: none;
        border-radius: 10px;
        background-color: #ffffff;
    }
    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
