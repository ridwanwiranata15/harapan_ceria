<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $file = $request->file('foto');
        $path = date('Y-m-d') . '_' . $request->username . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'image_profile' => $path
        ]);
        return redirect('/');
    }
    public function signin(Request $request)
    {
       if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
       ])){
            return redirect('/');
       }else{
            return redirect()->back();
       };
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
