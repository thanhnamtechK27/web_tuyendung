<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class ProfileController extends Controller
{
    public function profile()
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        return view('admin.profile.profile', ['user' => $user]);
    }
    public function update_profile(UpdateProfileRequest $request)
{
    $user = Auth::user();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->sdt = $request->phone; 
    $user->location = $request->address; 

    if ($request->hasFile('avatar')) { 
        // Xóa ảnh cũ nếu tồn tại
        if ($user->avatar) {
            Storage::delete($user->avatar);
        }
        // Lưu ảnh mới vào thư mục upload/user/avatar
        $user->avatar = $request->file('avatar')->store('upload/user/avatar');
    }

    $user->save();

    return redirect()->route('profile')->with('success', 'Cập nhật thông tin thành công!');
}

}
