<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConfigRequest;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        return view('admin.page.config.index');
    }

    public function store(CreateConfigRequest $request) {
        $data = $request->all();

        Config::create($data);

        return response()->json([
            'data' => $data,
        ]);
    }

    public function data() {
        $data = Config::orderByDESC('id')->first();
        return response()->json([
            'data' => $data,
        ]);
    }
}
