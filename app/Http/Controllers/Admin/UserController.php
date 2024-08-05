<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = User::query();

        if ($search) {
            $query->where('fullname', 'LIKE', '%' . $search . '%');
        }

        $users = $query->orderBy("created_at", "desc")->paginate(10);

        return view('admin.users.index', ['users' => $users]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->except('avatar');

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $fileName);
            $data['avatar'] = $fileName;
        } else {
            $data['avatar'] = 'default-user.png';
        }

        if (!User::create($data)) {
            return redirect()->back('admin.users.create')->with('error', 'User could not be created');
        }

        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->except(['avatar', 'password']);


        if ($request->input('password')) {
            $data['password'] = Hash::make($request->input('password'));
        } else {
            $data['password'] = $user->password;
        }

        $data['avatar'] = $user->avatar;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $fileName);
            $data['avatar'] = $fileName;
            if ($user->avatar && file_exists(storage_path('app/public/uploads/' . $user->avatar))) {
                unlink(storage_path('app/public/uploads/' . $user->avatar));
            }
        }

        if (!$user->update($data)) {
            return redirect()->back('admin.users.edit')->with('error', 'User could not be updated');
        }

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->id == Auth::user()->id) {
            return redirect()->back()->with('error', 'You cannot delete yourself');
        } elseif ($user->is_admin == 1) {
            return redirect()->back()->with('error', 'You cannot delete an admin');
        }

        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }
}
