<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\Phong;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{

    public function index()
    {
        $loaiPhong = Phong::get();
        return view('admin.page.hoa_dons.index', compact('loaiPhong'));
    }

    public function data()
    {
        $data = HoaDon::where('is_don_hang', 0)->get();
        return response()->json([
            'data' => $data,
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $hoadon = HoaDon::where('id', $request->id)->first();
        $hoadon->update($data);

        return response()->json([
            'status' => true,
        ]);
    }

    public function destroy(Request $request)
    {
        HoaDon::where('id', $request->id)->first()->delete();
        return response()->json([
            'status' => true,
        ]);
    }
}
