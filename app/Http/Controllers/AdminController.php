<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.page.tai_khoan.index');
    }


    public function store(CreateAdminRequest $request)
    {
        $data = $request->all();
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

    public function update(Request $request, Admin $admin)
    {
        //
    }


    public function destroy(Admin $admin)
    {
        //
    }
}
