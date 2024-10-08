<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;


use App\Models\User;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login_user()
    {
        return view('users.login_register.login');
    }
    public function register_user()
    {
        return view('users.login_register.register');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function check_register_user(UserRegisterRequest $request)
    {
        // Kiểm tra và lấy dữ liệu từ request đã được validate
        $validatedData = $request->validated();
        
        // Mã hóa password:
        $validatedData['password'] = bcrypt($validatedData['password']);
        
        // Xử lý upload avatar
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $validatedData['avatar'] = $avatarPath; // Lưu đường dẫn avatar
        }
    
        // Gán giá trị level từ request
        $validatedData['level'] = $request->level;
    
        // Tạo thành viên mới trong cơ sở dữ liệu
        $member = User::create($validatedData);
        
        return redirect()->route('login_user')->with('success', 'Đăng ký thành công! Bạn đã có thể đăng nhập.');
    }
    
    
    
    
    public function check_login_user(UserLoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $remember = $request->has('remember_me');
    
        if (Auth::attempt($login, $remember)) {
            // Lấy thông tin người dùng
            $user = Auth::user();
            session(['email' => $request->email]);
    
            // Chuyển hướng dựa trên level
            if ($user->level == 1) {
                return redirect('/home'); // Khách hàng
            } elseif ($user->level == 0 || $user->level == 2) {
                return redirect('/dashboard'); // Admin hoặc Nhà tuyển dụng
            }
        } else {
            return redirect()->back()->withErrors('Email hoặc mật khẩu không hợp lệ.');
        }
    }
    
    public function logout_user(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate();
        return redirect('/login_user');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
