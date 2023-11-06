<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use function Sodium\increment;

class PostController extends Controller
{

    public function create()
    {
        $categories = Category::all();

        return view('user.pages.create_blog',compact("categories"));
    }


    public function store(Request $request)
    {
//        return dd($request);
        $request->validate([
            "thumbnail"=>"nullable|mimes:png,jpg,jpeg,gif|mimetypes:image/jpeg,image/png,image/jpg",
            "title"=>"required",
            "category_id" =>"required",
            "body"=>"required",
        ]);
        try{
            $thumbnail = null;
            if ($request->hasFile("thumbnail")) {
                $path = public_path("uploads");
                $file = $request->file("thumbnail");
                $file_name = Str::random(5).time().Str::random(5).".".$file->getClientOriginalExtension(); //$file->getClientOriginalName() lay anh goc tu may cua minh len
                $file->move($path, $file_name);
                $thumbnail = "/uploads/" . $file_name;
            }
            Post::create([
                "thumbnail"=> $thumbnail,
                "title"=>$request->get("title"),
                "slug"=> Str::slug($request->get("title")),
                "category_id"=>$request->get("category_id"),
                "user_id"=>Auth::user()->id,
                "body"=>$request->get("body"),
            ]);
            return redirect()->to("/")->with("success","Successfully");
        }catch (\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }


    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
