<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller {
    public function show($name) {
        $validCategories = ['shirts', 'watches', 'jeans', 'shoes'];
        if (!in_array($name, $validCategories)) {
            abort(404);
        }
        $products = Product::where('category', $name)->get();
        return view('categories.show', compact('products', 'name'));
    }
}
