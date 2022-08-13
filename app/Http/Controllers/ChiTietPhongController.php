<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckIdChiTietPhongRequest;
use App\Http\Requests\CreateChiTietPhongRequest;
use App\Http\Requests\UpdateChiTietPhongRequest;
use App\Models\ChiTietPhong;
use App\Models\Phong;
use Carbon\Carbon;
use Database\Seeders\ChiTietPhongSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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

    public function getListPhong(Request $request)
    {
        $data = ChiTietPhong::where('is_open', 1)
            ->where('id_phong', $request->id)
            ->select('id', 'ten_phong')
            ->get();

        foreach ($data as $key => $value) {
            $begin = Carbon::createFromFormat("Y-m-d", $request->ngay_bat_dau);
            $end = Carbon::createFromFormat("Y-m-d", $request->ngay_ket_thuc);
            $str = '';
            $listDate = '';
            $footList = [];
            while ($begin <= $end) {
                $str = $str . '1,';
                $listDate = $listDate . $begin->format('d/m/Y') . ',';
                $begin->addDay(1);
            }
            $str = Str::substr($str, 0, strlen($str) - 1);
            $listDate = Str::substr($listDate, 0, strlen($listDate) - 1);
            $value->y = $str;
            for ($i = 0; $i < count(explode(',', $listDate)); $i++) {
                $footList[$i] = (object) array('sl' => 0, 'phong' => []);
            }
        }
        // $listDate = '';
        // $begin = Carbon::createFromFormat("Y-m-d", $request->ngay_bat_dau);
        // $end = Carbon::createFromFormat("Y-m-d", $request->ngay_ket_thuc);
        // while ($begin <= $end) {
        //     $listDate = $listDate . $begin->format('d/m/Y') . ',';
        //     $begin->addDay(1);
        // }
        // $listDate = Str::substr($str, 0, strlen($listDate) - 1);
        // dd($listDate);
        return response()->json([
            'data' => $data,
            'listDate' => $listDate,
            'footList' => $footList,
        ]);
    }
}
