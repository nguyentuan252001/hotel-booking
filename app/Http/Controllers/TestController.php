<?php

namespace App\Http\Controllers;

use App\Models\Phong;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function view()
    {
        return view('admin.share.master');
    }

    public function index()
    {
        return view('client.page.home_page ');
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
