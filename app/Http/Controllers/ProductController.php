<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($categorySlug, $childCategorySlug = null, $productSlug = null)
    {
        if ($childCategorySlug) {
            $category = Category::where('slug', $childCategorySlug)->first();
        } else {
            $category = Category::where('slug', $categorySlug)->first();
        }

        if (!$category) {
            abort(404, 'Không tìm thấy danh mục sản phẩm');
        }

        // Lấy danh sách sản phẩm thuộc category
        $products = Product::where('category_id', $category->id)->get();

        return view('client.product.index', compact('products', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($productSlug)
    {
        $product = Product::where('slug', $productSlug)->first();

        if (!$product) {
            abort(404, 'Product not found');
        }

        return view('client.product.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
