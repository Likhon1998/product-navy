<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('welcome', compact('products'));
    }

    public function adminIndex()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_name' => 'nullable|string',
            'category' => 'nullable|string',
            'product_image' => 'nullable|image|mimes:jpg,jpeg,png',
            'price' => 'nullable|numeric',
        ]);

        if ($request->hasFile('product_image')) {
            $data['product_image'] = $request->file('product_image')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Product added successfully!');
    }

    public function edit(Product $product)
{
    return view('admin.products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    $data = $request->validate([
        'product_name' => 'nullable|string',
        'category' => 'nullable|string',
        'product_image' => 'nullable|image|mimes:jpg,jpeg,png',
        'price' => 'nullable|numeric',
    ]);

    if ($request->hasFile('product_image')) {
        $data['product_image'] = $request->file('product_image')->store('products', 'public');
    }

    $product->update($data);
    return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
}

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
}
