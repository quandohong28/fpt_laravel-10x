<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    
    public function index()
    {
        $departments = DB::table('departments')->get();
        return view('admin.categories.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     * GET
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * GET
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT/PATCH
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
