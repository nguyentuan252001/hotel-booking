<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        return view('admin.page.review.index');
    }


    public function store(CreateReviewRequest $request)
    {
        $data = $request->all();

        Review::create($data);

        return response()->json([
            'status' => true
        ]);
    }

    public function data()
    {
        $data = Review::get();
        return response()->json([
            'data' => $data
        ]);
    }


    public function destroy(Request $request)
    {
        Review::find($request->id)->first()->delete();
        return response()->json([
            'status' => true
        ]);
    }

    public function update(UpdateReviewRequest $request)
    {
        $data = $request->all();
        $reiview = Review::find($request->id);
        $reiview->update($data);

        return response()->json([
            'status' => true
        ]);
    }
}
