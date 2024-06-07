<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
{
    $reviews = Review::all();

    return view('reviews.review', compact('reviews'));
}

public function create()
{
    return view('reviews.create', );
}

public function store(Request $request)
{
    $validatedData = $request->validate([
    'title' => 'required',
    'user' => 'required',
    'rating' => 'required',
    'date' => 'required',
    ]);

    Review::create($validatedData);

    return redirect('/reviews')->with('success', 'Review added successfully!');
}

public function destroy(Review $review)
{
    $review->delete();
    return redirect('/reviews')->with('success', 'Review deleted successfully!');
}
}
