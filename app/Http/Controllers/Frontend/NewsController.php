<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsAddRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function getAllSubcategories($category)
    {
        $categories = collect([$category]);
        foreach ($category->altKategori as $altcat) {
            $categories = $categories->merge($this->getAllSubcategories($altcat));
        }
        return $categories;
    }

    public function newsindex(Request $request){

        if(Auth::check()) {

            $user = Auth::user();
            $news = News::all();
            $category = Category::whereNull('cat_ust')->with('altKategori')->get();
            $selectCatId = $request->category_id;
            Kategoriler();


            return view('frontend.pages.newss.currentNews',compact('user','news','category','selectCatId'));
            
        }
        return redirect()->route('login.index');
    }
    
    public function filternews(Request $request){
        
        if(Auth::check()){

            $user = Auth::user();

            $category = Category::whereNull('cat_ust')->with('altKategori')->get();

            $selectCatId = $request->category_id;

            $selectcategory = Category::where('id' , $selectCatId)->first();

            $selectcategories = $this->getAllSubcategories($selectcategory);

            $news = News::whereIn('category_id', $selectcategories->pluck('id'))->get();

            return view('frontend.pages.newss.currentNews',compact('news','category','user','selectCatId'));

        }
    }

    public function usernews(){

        if(Auth::check()) {

            $user = Auth::user();
            $news = News::where('user_id',$user->id)->get();
    
            
    
            return view('frontend.pages.newss.usernews',compact('user','news'));
        }
        return redirect()->route('login.index');
    }

    public function addnews(Request $request){

        if(Auth::check()){

            $user = Auth::user();
            $category = Category::whereNull('cat_ust')->with('altKategori')->get();
            $selectCatId = $request->category_id;
            Kategoriler();

            return view('frontend.pages.newss.createNews',compact('user','category','selectCatId'));

        }

        return redirect()->route('login.index');
    }

    public function newsedit($id){

        if(Auth::check()) {

            $user = Auth::user();

            $news = News::findOrFail($id);

            return view('frontend.pages.newss.editNews',compact('user','news'));

        }
               
        return redirect()->route('login.index');
        
    }

    public function newsupdate(Request $request, $id){

        if(Auth::check()) {

            $news = News::findOrFail($id);

            $news->update([
                'name' => $request->name,
                'subject' => $request->subject,
                'news' => $request->news,
            ]);

            return redirect()->route('user.news')->withSuccess('Haberiniz Başarılı Bir Şekilde Güncellenmiştir.');
        }
        
        return redirect()->route('login.index');
    }

    public function newscreate(NewsAddRequest $request){

        if(Auth::check()) {
            $user = Auth::user();

            News::create([

                'user_name' => $user->name,
                'user_email' => $user->email,
                'user_phone' => $user->phone,
                'user_job' => $user->job,
                'user_company' => $user->company,
                'user_school' => $user->school,
                'user_country' => $user->country,
                'user_city' => $user->city,
                'user_id' => $user->id,
                'user_age' => $user->age,
                'name' => $request->name,
                'subject' => $request->subject,
                'news' => $request->news,
                'category_id' => $request->category_id,
            ]);

            return redirect()->route('add.news')->withSuccess('Heberiniz Başarılı Bir Şekilde YAyınlanmıştır');
        }
        
        return redirect()->route('login.index');
    }

    public function newsdelete($id){

        if(Auth::check()) {

            $news = News::find($id);
            
            $news->delete();
            
            return redirect()->route('user.news')->withSuccess('Haberiniz Başarılı Bir Şekilde Silinmiştir.');
        }
        
        return redirect()->route('login.index');
    }
    
}
