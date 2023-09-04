<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class ProfileController extends Controller
{

    public function index()
    {
        return view('pages.admin.profile.index');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // var_dump($request->file('profile'));
        // die;
        if ($request->file('profile')) {
            $request->validate([
                'profile' => 'image',
            ]);

            if ($user->profile) {
                unlink(public_path('storage/' . $user->profile));
            }

            //update profile
            User::where('id', $user->id)->update([
                'profile' => $request->file('profile')->store('img', 'public')
            ]);
        }

        if ($request->old_password || $request->password || $request->password_confirmation) {
            $this->validate($request, [
                'old_password'          => 'required',
                'password'              => 'required|min:5',
                'password_confirmation' => 'required|same:password'
            ]);

            if (Hash::check($request->old_password, $user->password)) {
                //update password
                User::where('id', $user->id)->update([
                    'password' => Hash::make($request->password)
                ]);
            } else {
                return back()->with('error', 'Password lama tidak sesuai');
            }
        }

        return redirect(route('profile'))->with('status', 'Data profile berhasil diubah');
    }
}
