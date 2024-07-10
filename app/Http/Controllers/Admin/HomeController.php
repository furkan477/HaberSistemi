<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function logout(Request $request)
    {
        Auth::logout();    
        
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
    
    public function index(){
        return view('backend.pages.admin');
    }

    public function userList(){

        //$user = User::select('name')->get();
        $users = User::get();

        return view('backend.pages.users.userlist',compact('users'));
    }

    public function userİnfo (Request $request , $id){

        $user = User::where('id',$id)->first();

        $newsCount = News::where('user_id',$id)->count();
        $news = News::where('user_id',$id)->get();

        $contactCount = ContactMessage::where('user_id',$id)->count();
        $contact = ContactMessage::where('user_id',$id)->get();

        return view('backend.pages.users.userinfo',compact('user','newsCount','news','contactCount','contact'));
    }



    public function contactDelete($id){
        $contact = ContactMessage::where('id',$id);
        $contact->delete();

        return redirect()->route('admin.user.list');
    }
    public function contactİnfo($id){
        $contact = ContactMessage::where('id',$id)->first();

        return view('backend.pages.users.usercontactupdate',compact('contact'));
    }
    public function contactUpdate(Request $request,$id){
        $contact = ContactMessage::findOrFail($id);

        $contact->name = $request->name;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->status = $request->status;
        $contact->save();

        return redirect()->route('admin.user.list');
    }



    public function newsİnfo($id){
        $news = News::where('id',$id)->first();

        return view('backend.pages.users.usernewsupdate',compact('news'));
    }
    public function newsUpdate(Request $request , $id){
        $news = News::findOrFail($id);

        $news->name = $request->name;
        $news->subject = $request->subject;
        $news->news = $request->news;
        $news->status = $request->status;
        $news->save();

        return redirect()->route('admin.user.list');
    }
    public function newsDelete($id){
        $news = News::where('id',$id);
        $news->delete();

        return redirect()->route('admin.user.list');
    }



    public function userDelete($id) {

        $user = User::where('id',$id);
        $user->delete();

        return redirect()->route('admin.user.list');
    }
    public function userProfilUpdate(Request $request,$id){

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->job = $request->job;
        $user->company = $request->company;
        $user->school = $request->school;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->is_admin = $request->is_admin;
        $user->age = $request->age;

        $user->save();

        return redirect()->route('admin.user.list');
    }
    public function userSettings($id){
        $user = User::where('id',$id)->first();

        return view('backend.pages.users.usersettings',compact('user'));
    }


    public function newsList(){

        $news = News::all();
        $newsCount = News::count();

        return view('backend.pages.newslist',compact('news','newsCount'));
    }

    public function contactList(){
        $contact = ContactMessage::all();
        $contactCount = ContactMessage::count();

        return view('backend.pages.contactlist',compact('contact','contactCount'));
    }


    public function categoriesList(){
        $anaCount = Category::where('cat_ust',0)->count();
        $altCount = Category::where('cat_ust','>',0)->count();
        $categories = Category::all();

        return view('backend.pages.categorieslist',compact('categories','anaCount','altCount'));
    }
    public function categoriesİnfo($id){
        $categories = Category::where('id',$id)->first();
        $category = Category::all();

        return view('backend.pages.categoriesupdate',compact('categories','category'));
    }
    public function categoriesShow(Request $request){
        $category = Category::where('cat_ust',0)->with('altKategori')->get();
        $selectCatId = $request->cat_ust;
        Kategoriler();

        return view('backend.pages.categoriescreate',compact('category','selectCatId'));
    }
    public function categoriesCreate(Request $request){

        Category::create([
            'cat_ust' => $request->cat_ust,
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.categories.list');
    }
    public function categoriesUpdate(Request $request,$id){
        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->cat_ust = $request->cat_ust;
        $category->status = $request->status;
    
        $category->save();

        return redirect()->route('admin.categories.list');
    }
    public function categoriesDelete($id){

        $categories = Category::where('id',$id);
        $categories->delete();

        return redirect()->route('admin.categories.list');
    }
}
