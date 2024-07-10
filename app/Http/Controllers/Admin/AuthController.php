<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser;
use Illuminate\Http\Request;

class AuthController extends Controller
{
/*    public function showLogin(){
        return view('backend.auth.login');
    }

    public function showRegister(){
        return view('backend.auth.register');
    }
    public function register(Request $request){

        AdminUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.login');
    }

    public function login(Request $request){
        
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return redirect()->back();
    }
*/
    public function logout(Request $request)
    {
        Auth::logout();    
        
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
}
