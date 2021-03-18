<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use const http\Client\Curl\AUTH_ANY;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time() . Auth::user()->name . "." . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('img/upload/'), $imageName);

        $imageNamej = Auth::id().time() . Auth::user()->name . "." . $request->imagej->getClientOriginalExtension();
        $request->imagej->move(public_path('img/upload/'), $imageNamej);

        Portfolio::create([
            "user_id"=>Auth::id(),
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "description" => $request->description,
            "links" => json_encode($request->links),
            "properties" => json_encode($request->properties),
            "image"=>$imageName,
            "imagej"=>$imageNamej
        ]);

        return back()->with("msg","نمونه کار با موفقیت ثبت شد.");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
