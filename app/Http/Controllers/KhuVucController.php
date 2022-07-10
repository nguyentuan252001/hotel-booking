<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeStatusKhuVucRequest;
use App\Http\Requests\CreateKhuVucRequest;
use App\Http\Requests\UpdateKhuVucRequest;
use App\Models\KhuVuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhuVucController extends Controller
{

    public function index()
    {
        $data = KhuVuc::all();

        return view('admin.page.khu_vuc.index_old', compact('data'));
    }

    public function checkMaKhu(Request $request)
    {
        $khuVuc = KhuVuc::where('ma_khu', $request->ma_khu)->first();
        if ($khuVuc) {
            return response()->json([
                'status'  => false,
            ]);
        } else {
            return response()->json([
                'status'  => true,
            ]);
        }
    }

    public function index_new()
    {
        return view('admin.page.khu_vuc.index_new');
    }

    public function data()
    {
        $khuVuc = KhuVuc::all();

        return response()->json([
            'data'  => $khuVuc,
        ]);
    }

    public function store_new(CreateKhuVucRequest $request)
    {
        KhuVuc::create([
            'ma_khu'        => $request->ma_khu,
            'ten_khu'       => $request->ten_khu,
            'mo_ta'         => $request->mo_ta,
            'tinh_trang'    => $request->tinh_trang,
        ]);

        return response()->json([
            'status'  => true,
        ]);
    }

    public function update_new(UpdateKhuVucRequest $request)
    {
        // $khuVuc = KhuVuc::find($request->id);
        // $khuVuc->ten_khu    = $request->ten_khu;
        // $khuVuc->ma_khu     = $request->ma_khu;
        // $khuVuc->mo_ta      = $request->mo_ta;
        // $khuVuc->tinh_trang = $request->tinh_trang;
        // $khuVuc->save();
        // $khuVuc->update($request->all());

        $khuVuc = KhuVuc::where('id', $request->id)->first();

        $data = $request->all();
        $khuVuc->update($data);

        return response()->json([
            'status'  => true,
        ]);
    }

    public function changeStatus(ChangeStatusKhuVucRequest $request)
    {
        // Tìm khu vực
        // all() -> array -> foreach
        // first() -> object -> php: obj->ma_khu và js/jquery obj.ma_khu
        // $khuVuc = KhuVuc::find($request->id);
        $khuVuc = KhuVuc::where('id', $request->id)->first();
        // $sql    = 'select * from `khu_vucs` where id = ' . $request->id; DB::select($sql);
        if ($khuVuc->tinh_trang == 0) {
            $khuVuc->tinh_trang = 1;
            // $sql = 'update `khu_vucs` set tinh_trang = 1 where id = $request->id'; db::update($sql)
        } else {
            $khuVuc->tinh_trang = 0;
        }
        $khuVuc->save();

        return response()->json([
            'status' => true,
        ]);
    }


    public function store(CreateKhuVucRequest $request)
    {
        KhuVuc::create([
            'ma_khu'        => $request->ma_khu,
            'ten_khu'       => $request->ten_khu,
            'mo_ta'         => $request->mo_ta,
            'tinh_trang'    => $request->tinh_trang,
        ]);

        toastr()->success('Đã thêm mới khu vực thành công!');

        return redirect()->back();
    }


    public function show(KhuVuc $khuVuc)
    {
        //
    }


    public function edit($id)
    {
        $sql    = "SELECT * FROM `khu_vucs` where id = " . $id;
        $khuVuc = DB::select($sql);
        if (count($khuVuc) > 0) {
            // dd($khuVuc); // $khuVuc->, $khuVuc[0]->
            return view('admin.page.khu_vuc.edit_old', compact('khuVuc'));
        } else {
            toastr()->error('Khu vực không tồn tại!');
            return redirect()->back();
        }
    }

    public function edit_new(ChangeStatusKhuVucRequest $request)
    {
        $khuVuc = KhuVuc::find($request->id); // trả về 1 obj

        return response()->json([
            'data'  => $khuVuc,
        ]);
    }


    public function update(Request $request, KhuVuc $khuVuc)
    {
        //
    }

    public function destroy(ChangeStatusKhuVucRequest $request)
    {
        $data = KhuVuc::where('id', $request->id)->first()->delete();
        return response()->json([
            'status' => true,
        ]);
        // KhuVuc::find($request->id)->delete();
    }

    public function delete_old($id)
    {
        $khuVuc = KhuVuc::where('id', $id)->first();
        if ($khuVuc) {
            $khuVuc->delete();
            toastr()->success('Đã xóa khu vực thành công!');
            return redirect()->back();
        } else {
            toastr()->error('Khu vực không tồn tại!');
            return redirect()->back();
        }
    }
}
