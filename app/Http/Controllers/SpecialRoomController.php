<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckIdGiaPhongRequest;
use App\Http\Requests\CreateGiaPhongRequest;
use App\Http\Requests\UpdateGiaPhongRequest;
use App\Models\Phong;
use App\Models\SpecialRoom;
use Illuminate\Http\Request;

class SpecialRoomController extends Controller
{
    public function index()
    {
        $phong = Phong::get();

        return view('admin.page.phong.special_room', compact('phong'));
    }

    public function getData()
    {
        $duLieu = SpecialRoom::join('phongs', 'special_rooms.id_phong', 'phongs.id')
                             ->select('special_rooms.*', 'phongs.ma_phong')
                             ->orderBy('special_rooms.day_begin')
                             ->orderBy('phongs.ma_phong')
                             ->get();

        return response()->json([
            'data'    => $duLieu,
        ]);
    }

    public function store(CreateGiaPhongRequest $request)
    {
        $data       = $request->all();
        // 1. Danh sách các ngày có giá đặc biệt
        $list       = SpecialRoom::where('id_phong', $request->id_phong)->get();
        foreach($list as $key => $value) {
            if(
                ($request->day_begin >= $value->day_begin && $request->day_begin <= $value->day_end) ||
                ($request->day_end >= $value->day_begin && $request->day_end <= $value->day_end)
            ) {
                return response()->json([
                    'status'    => false,
                ]);
            }
        }

        SpecialRoom::create($data);

        return response()->json([
            'status'    => true,
        ]);
    }

    public function changeStatus(CheckIdGiaPhongRequest $request)
    {
        $giaPhong = SpecialRoom::where('id', $request->id)->first();

        $giaPhong->is_open = !$giaPhong->is_open;
        $giaPhong->save();

        return response()->json([
            'status'    => true,
        ]);
    }

    public function destroy(CheckIdGiaPhongRequest $request)
    {
        SpecialRoom::where('id', $request->id)->first()->delete();

        return response()->json([
            'status'    => true,
        ]);
    }

    public function edit(CheckIdGiaPhongRequest $request)
    {
        $duLieu = SpecialRoom::where('id', $request->id)->first();

        return response()->json([
            'data'    => $duLieu,
        ]);
    }

    public function update(UpdateGiaPhongRequest $request)
    {
        $list       = SpecialRoom::where('id_phong', $request->id_phong)
                                 ->where('id', '<>', $request->id)
                                 ->get();

        foreach($list as $key => $value) {
            if(
                ($request->day_begin >= $value->day_begin && $request->day_begin <= $value->day_end) ||
                ($request->day_end >= $value->day_begin && $request->day_end <= $value->day_end)
            ) {
                return response()->json([
                    'status'    => false,
                ]);
            }
        }


        $giaPhong = SpecialRoom::where('id', $request->id)->first();
        $data     = $request->all();
        $giaPhong->update($data);

        return response()->json([
            'status'    => true,
        ]);
    }
}
