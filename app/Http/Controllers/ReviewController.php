<?php

namespace App\Http\Controllers;

use App\Review;
use App\Product;
use Illuminate\Http\Request;

class ReviewController extends Controller
{   
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'review' => 'required|string',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        $review = new Review;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->user_id = auth()->user()->id;

        $product->reviews()->save($review);
        return response()->json(['message' => 'Review Added', 'review' => $review]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        if (auth()->user()->id !== $review->user_id) {
            return response()->json(['message' => 'Action Forbidden']);
        }
        $request->validate([
            'review' => 'required|string',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();

        return response()->json(['message' => 'Review Updated', 'review' => $review]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        if (auth()->user()->id !== $review->user_id) {
            return response()->json(['message' => 'Action Forbidden']);
        }
        $review->delete();
        return response()->json(null, 204);
    }
}
