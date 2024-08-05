<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function postDetail($slug)
    {
        return view('client.post.detail');
    }

    public function search()
    {
        return view('client.search');
    }
}
