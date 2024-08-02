<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('client.profile.index');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $data = $request->except('avatar');
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
            return redirect()->back()->with('error', 'Update failed!!');
        }

        return redirect()->route('page.profile.index')->with('success', 'Update successfully!!');
    }

    public function changePassword()
    {
        return view('client.profile.change-password');
    }

    public function postChangePassword(Request $request)
    {

        $user = auth()->user();
        if (password_verify($request->old_password, $user->password)) {
            $user->update(['password' => bcrypt($request->password)]);
            return back()->with('success', 'Change password successfully');
        }

        return redirect()->back()->with('error', 'Change password failed');
    }
}
