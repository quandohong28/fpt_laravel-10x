<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = DB::table('books')->join('categories', 'category_id', 'categories.id')->selectRaw('categories.name as category_name, books.*')->get();

        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('admin.book.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'thumbnail' => $request->thumbnail,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'publication' => $request->publication,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $books = DB::table('books')->insert($data);
        if ($books) {
            return redirect('/admin/books')->with('success', 'Thêm một sản phẩm thành công');
        }
        return redirect('/admin/books')->with('error', 'Lỗi khi thêm sản phẩm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = DB::table('books')->where('id', $id)->first();

        return view('admin.book.detail', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = DB::table('books')->where('id', $id)->first();
        $categories = DB::table('categories')->get();

        return view('admin.book/edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'title' => $request->title,
            'thumbnail' => $request->thumbnail,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'publication' => $request->publication,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category,
            'updated_at' => now(),
        ];

        $books = DB::table('books')->where('id', $id)->update($data);
        if ($books) {
            return redirect('/admin/books')->with('success', 'Cập nhật một sản phẩm thành công');
        }
        return redirect('/admin/books')->with('error', 'Lỗi khi cập nhật sản phẩm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = DB::table('books')->delete($id);
        if ($books) {
            return redirect('/admin/books')->with('success', 'Xoá một sản phẩm thành công');
        }
        return redirect('/admin/books')->with('error', 'Lỗi khi xoá sản phẩm');
    }
}
