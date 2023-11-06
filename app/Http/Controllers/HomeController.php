<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {


        return view("user.pages.home");
    }

    public function aboutUs()
    {


        return view("user.pages.about_us");
    }

    public function blog()
    {


        return view("user.pages.blog.blog");
    }

    public function blogDetail()
    {


        return view("user.pages.blog.blog-detail");
    }
    public function event()
    {


        return view("user.pages.event.event");
    }
    public function translate()
    {


        return view("user.pages.translate.translate");
    }

}
