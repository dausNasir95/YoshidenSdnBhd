<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $featuredProducts = Product::where('is_featured', true)->get();
    //     $categories = Product::select('category')->distinct()->get();
        
    //     return view('product', compact('featuredProducts', 'categories'));
    // }
    // public function index(Request $request)
    // {
    //     $query = Product::query();

    //     if ($request->filled('search')) {
    //         $query->where('product_name', 'like', '%' . $request->search . '%');
    //     }

    //     if ($request->filled('category')) {
    //         $query->where('category', $request->category);
    //     }

    //     // $featuredProducts = $query->get();
    //     $query->where('is_featured', true);
    //     $featuredProducts = $query->get();

    //     $categories = Product::select('category')->distinct()->pluck('category');

    //     return view('products', compact('featuredProducts', 'categories'));
    // }
    public function index(Request $request)
    {
        // For general product filtering
        $productsQuery = Product::query();
    
        if ($request->filled('search')) {
            $productsQuery->where('product_name', 'like', '%' . $request->search . '%');
        }
    
        if ($request->filled('category')) {
            $productsQuery->where('category', $request->category);
        }
        $productsQuery->where('is_featured', true);
    
        $featuredProducts = $productsQuery->get();
        $categories = Product::select('category')->distinct()->pluck('category');
    
        return view('product', compact('featuredProducts', 'categories'));
        
    }
    
    public function show(Product $product)
    {
        $relatedProducts = Product::where('category', $product->category)
                                ->where('id', '!=', $product->id)
                                ->limit(4)
                                ->get();
                                
        return view('productdetails', compact('product', 'relatedProducts'));
    }
    
    public function submitEnquiry(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'required|string',
            'quantity' => 'nullable|integer'
        ]);
        
        // Process enquiry (send email, save to DB, etc.)
        // You'll need to implement this based on your requirements
        
        return back()->with('success', 'Your enquiry has been submitted!');
    }
}