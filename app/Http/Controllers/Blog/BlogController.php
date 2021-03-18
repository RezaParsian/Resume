<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderby("id", "desc")->get();
        return view("Blog.welcome", compact("portfolios"));
    }

    public function show($slug)
    {
        $portfolio = Portfolio::where("slug", $slug)->firstOrFail();
        return view("Blog.portfolio",compact("portfolio"));
    }
}
