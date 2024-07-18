<?php

namespace App\Http\Controllers\Amin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy ra tất cả bản ghi
        // $posts = Post::all();

        // Lấy ra bản ghi đầu tiên
        // $post = Post::all()->first();

        // Lấy dữ liệu theo điều kiện
        // $posts = Post::where('category_id', 1)->get();

        // tìm kiếm dữ liệu
        // $posts = Post::where('title', 'LIKE', '%ro%')->get();

        /**
         * Các hàm trong sql
         * sum()
         * min()
         * max()
         * count()
         * avg()
         */

        //  Tính tổng
        // $sum = Post::sum('view');

        // Sắp xếp dữ liệu
        $posts = Post::orderBy("created_at")->get();

        return $posts;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
