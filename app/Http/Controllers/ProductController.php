<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:shirts,watches,jeans,shoes',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'description' => 'required|string|max:1000',
        ]);

        $imagePath = $request->file('image')->store('public/images');

        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'image' => 'storage/' . basename($imagePath),
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('product.create')->with('success', 'Product added successfully!');
    }
}
