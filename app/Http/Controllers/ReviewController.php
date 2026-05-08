<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        Review::create([
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'status' => true, // Auto-approve for now
        ]);

        return back()->with('success', 'Your review has been submitted successfully.');
    }

    public function indexAdmin()
    {
        $reviews = Review::with('product')->latest()->paginate(50);
        return view('admin.reviews.list-reviews', compact('reviews'));
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.reviews.edit-review', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $review->update($request->all());

        return redirect()->route('administrator.reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
