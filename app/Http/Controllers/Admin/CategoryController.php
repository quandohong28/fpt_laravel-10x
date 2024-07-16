<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')->get();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
        ];

        $category = DB::table('categories')->insert($data);
        if ($category) {
            return redirect('/admin/categories')->with('success', 'Thêm mới thành công');
        }
        return redirect('/admin/add-category')->with('error', 'Thêm mới thất bại');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.category.detail');
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
        $category = DB::table('categories')->delete($id);
        if ($category) {
            return redirect('/admin/categories')->with('success', 'Xoá một danh mục thành công');
        }
        return redirect('/admin/categories')->with('error', 'Lỗi khi xoá danh mục');
    }
}
