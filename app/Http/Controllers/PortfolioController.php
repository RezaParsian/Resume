<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use const http\Client\Curl\AUTH_ANY;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $imageName = time() . Auth::user()->name . "." . $request->file("image")->getClientOriginalExtension();
        $request->file("image")->move(public_path('img/upload/'), $imageName);

        $imageNamej = Auth::id().time() . Auth::user()->name . "." . $request->file("imagej")->getClientOriginalExtension();
        $request->file("imagej")->move(public_path('img/upload/'), $imageNamej);

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
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
