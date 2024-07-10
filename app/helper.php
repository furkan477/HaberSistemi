<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

if(!function_exists('Kategoriler')){
    function Kategoriler($cat_id = null){

        $categories = Category::where('cat_ust',$cat_id)->get();  

        foreach ($categories as $category){
            
            if($category->altkategori->count())
            {
                Kategoriler($category->id);
            }
        }
    }
}



?>