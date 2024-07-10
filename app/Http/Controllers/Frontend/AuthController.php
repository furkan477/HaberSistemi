<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginindex() {
        return view('frontend.auth.login');
    }

    public function registerindex() {
        return view('frontend.auth.register');
    }

    public function login(Request $request) {

        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($validation)){
            
            $request->session()->regenerate();
            
            if(Auth::user()->is_admin == 1){
                return redirect('/admin/dashboard')->withSuccess('Giriş Başarılı AnaSayfaya Yönlendiriliyorsunuz.');
            }
            return redirect('/')->withSuccess('Giriş Başarılı AnaSayfaya Yönlendiriliyorsunuz.');

        }

        return redirect('/login')->withError('Kullanıcı Bilgilerinizi Tekrar Kontrol Ediniz.');

    } 

    public function register(RegisterRequest $request) {

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'age' => $request->age,
            'job' => $request->job,
            'country' => $request->country,
            'city' => $request->city,
            'company' => $request->company,
            'school' => $request->school,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/login')->withSuccess('Kullanıcı Bilgileriniz Başarıyla Kaydedildi.');
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login');
}
}
