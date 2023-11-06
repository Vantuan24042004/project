<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("admin.pages.dashboard");
    }
    public function user(Request $request )
    {
        $search = $request->get("search");

        $users = User::Search($request)->paginate(10);


        return view("admin.pages.users",compact("users"));
    }

    public static function scopeSearch($request){
        if($request->has("search")&& $request->get("search") != ""){
            $search = $request->get("search");
            $result_search = User::where("name","like","%$search%")
                ->orWhere("email","like","%$search%")->get();
        }
        return $result_search;
    }

    public  function category(Request $request )
    {
        if($request->has("search")&& $request->get("search") != ""){
            $search = $request->get("search");
            $users = User::where("name","like","%$search%")
                ->orWhere("email","like","%$search%")->get();
        }

        return view("admin.pages.users",compact("users"));

    }

}
