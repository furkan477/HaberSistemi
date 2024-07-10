<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMessageRequest;
use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index(){

        $user = Auth::user();

        return view('frontend.pages.index',compact('user'));
    }

    public function about(){

        $user = Auth::user();
        

        return view('frontend.pages.about',compact('user'));
    }

    public function contact(){

        $user = Auth::user();

        return view('frontend.pages.contact',compact('user'));
    }

    public function contactSeeMessage(){

        $user = Auth::user();

        $user_id = Auth::user()->id;
        $contactmessage = ContactMessage::where('user_id',$user_id)->get();

        return view('frontend.pages.contactsee',compact('user','contactmessage'));
    }
    
    public function ContactMessage(ContactMessageRequest $request){
        
       $user_id = Auth::user()->id;

       ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'user_id' => $user_id,
       ]);

       return redirect('/')->withSuccess('Mesajınız Gönderilmiştir.');

    }

    public function usersProfil($id){

        $user = Auth::user();

        $userprofile = User::where('id',$id)->first();

        return view('frontend.pages.usersprofil',compact('user','userprofile'));
    }

    public function userProfil(){

        $user = Auth::user();

        return view('frontend.pages.userprofil',compact('user'));
    }

    public function userProfilSettings(){

        $user = Auth::user();

        return view('frontend.pages.userprofilsetting',compact('user'));
    }

    public function userProfilSettingsUpdate(Request $request){

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->job = $request->job;
        $user->country = $request->country;
        $user->age = $request->age;
        $user->city = $request->city;   
        $user->company = $request->company;
        $user->school = $request->school;
        $user->save();

        return redirect('/user-profil')->withSuccess('Kullanıcı Bilgileriniz Başarıyla Güncellendi.');
    }
}
