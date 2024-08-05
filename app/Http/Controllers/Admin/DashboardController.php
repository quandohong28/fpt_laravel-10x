<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hastag;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $totalUsers = User::count();
        $totalCategories = Category::count();
        $totalPosts = Post::count();
        $totalHastags = Hastag::count();
        return view('admin.dashboard', compact('totalUsers', 'totalCategories', 'totalPosts', 'totalHastags'));
    }
}
