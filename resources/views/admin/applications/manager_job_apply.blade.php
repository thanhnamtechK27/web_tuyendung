@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Quản lý hồ sơ ứng viên</h4>
                @if($applications->isEmpty())
                    <p>{{ $message }}</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>CV</th>
                                <th>Vị trí ứng tuyển</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applications as $application)
                                <tr>
                                    <td>{{ $application->name }}</td>
                                    <td>{{ $application->email }}</td>
                                    <td><a href="{{ Storage::url($application->resume) }}" target="_blank">Xem CV</a></td>
                                    <td>{{ $application->job->job_title }}</td>
                                    <td>
                                        <form action="{{ route('application.delete', $application->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa hồ sơ này?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
