<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    public function viewNews($str)
    {
        $vitri = 0;
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            if ($str[$i] == '-') {
                $vitri = $i;
                break;
            }
        }
        $id = Str::substr($str, $vitri + 1, strlen($str) - $vitri);
        $news = News::where('id', $id)->first();
        if ($news) {
            return view('client.page.news_detail', compact('news'));
        } else {
            return redirect('/');
        }
    }
    public function index()
    {
        return view('admin.page.tin_tuc.index');
    }

    public function store(CreateNewsRequest $request)
    {
        $data = $request->all();

        News::create($data);

        return response()->json([
            'status' => true
        ]);
    }

    public function data()
    {
        $data = News::get();
        return response()->json([
            'data' => $data
        ]);
    }

    public function changeStatus(Request $request)
    {
        $news = News::find($request->id);
        if ($news) {
            $news->is_open = !$news->is_open;
            $news->save();
            return response()->json([
                'status' => true
            ]);
        }
        return response()->json([
            'status' => false
        ]);
    }

    public function destroy(Request $request)
    {
        News::find($request->id)->first()->delete();
        return response()->json([
            'status' => true
        ]);
    }

    public function update(UpdateNewsRequest $request)
    {
        $data = $request->all();
        $news = News::find($request->id);
        $news->update($data);

        return response()->json([
            'status' => true
        ]);
    }
}
