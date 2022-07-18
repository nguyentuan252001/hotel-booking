<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\CreateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class   AdminController extends Controller
{

    public function index()
    {
        return view('admin.page.tai_khoan.index');
    }


    public function store(CreateAdminRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        Admin::create($data);
        return response()->json([
            'status' => true
        ]);
    }
    public function data()
    {
        $data = Admin::all();
        return response()->json([
            'data' => $data,
        ]);
    }

    public function viewLogin()
    {
        return view('admin.page.login');
    }

    public function actionLogin(AdminLoginRequest $request)
    {
        $check = Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if ($check) {
            toastr()->success("Login Thành công!");
            return redirect('/admin/phong');
        } else {
            toastr()->error("Sai tên đăng nhập hoặc mật khẩu!");
            return redirect('/admin/login');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        toastr()->success("Logout Thành công!");
        return redirect('/admin/login');
    }
}
