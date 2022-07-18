<?php

namespace App\Http\Controllers;

use App\Models\Phong;
use App\Models\Review;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function view()
    {
        return view('admin.share.master');
    }

    public function index()
    {
        $data = Phong::where('tinh_trang', 1)->get();

        $phong = Phong::where('tinh_trang', 1)->orderByDESC('gia_mac_dinh')->take(3)->get();
        $review = Review::orderByDESC('id')->take(9)->get();
        return view('client.page.home_page ', compact('data', 'phong', 'review'));
    }

    public function viewJQuery()
    {
        return view('admin.page.vue.jquery ');
    }

    public function viewVue()
    {
        return view('admin.page.vue.vue ');
    }

    public function testData()
    {
        $data = Phong::get();
        return response()->json([
            'data' => $data,
        ]);
    }
}
