<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckIdChiTietPhongRequest;
use App\Http\Requests\CreateChiTietPhongRequest;
use App\Http\Requests\UpdateChiTietPhongRequest;
use App\Models\ChiTietPhong;
use App\Models\Phong;
use Illuminate\Http\Request;

class ChiTietPhongController extends Controller
{
    public function index()
    {
        $phong = Phong::get();

        return view('admin.page.chi_tiet_phong.index', compact('phong'));
    }

    public function store(CreateChiTietPhongRequest $request)
    {
        $data = $request->all();

        ChiTietPhong::create($data);

        return response()->json([
            'status' => true,
        ]);
    }

    public function changeStatus(CheckIdChiTietPhongRequest $request)
    {
        $chitiet = ChiTietPhong::where('id', $request->id)->first();

        $chitiet->is_open = !$chitiet->is_open;
        $chitiet->save();

        return response()->json([
            'status'    => true,
        ]);
    }

    public function loadData()
    {
        $data = ChiTietPhong::join('phongs', 'chi_tiet_phongs.id_phong', 'phongs.id')
                                ->select('chi_tiet_phongs.*', 'phongs.ma_phong')
                                ->orderBy('phongs.ma_phong')
                                ->get();

        return response()->json([
            'data' => $data,
        ]);
    }
    public function delete(CheckIdChiTietPhongRequest $request)
    {
        ChiTietPhong::where('id', $request->id)->first()->delete();
        return response()->json([
            'status' => true,
        ]);
    }

    public function edit($id)
    {
        $data = ChiTietPhong::find($id);

        return response()->json([
            'data' => $data,
        ]);
    }

    public function update(UpdateChiTietPhongRequest $request)
    {
        $data = $request->all();
        $chitiet = ChiTietPhong::where('id', $request->id)->first();
        $chitiet->update($data);

        return response()->json([
            'status' => true,
        ]);
    }
}
