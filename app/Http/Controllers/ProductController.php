<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 🧭 Admin product list
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // 🆕 Create form
    public function create()
    {
        return view('admin.products.create');
    }

    // 💾 Store new product
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

    // ✏️ Edit form
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    // 🔄 Update product
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

    // ❌ Delete product
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }

    public function inquiry(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        return back()->with('success', 'Inquiry sent successfully!');
    }
}
