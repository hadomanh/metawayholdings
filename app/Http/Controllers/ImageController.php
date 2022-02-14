<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $images = Image::where('position', $request->position)->get();
        return view('picture.index')->with(compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $position = $request->position;
        return view('picture.create')->with(compact('position'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new Image();
        $image->title = $request->title;
        $image->position = $request->position;
        $image->url = '';

        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('image')){
            $imagelFileName = $currentMillis . '.' . $request->file('image')->extension();
            $image->url = $request->file('image')->storeAs($image->position, $imagelFileName, 'public');
            $image->url = asset('storage/' . $image->url);
        }

        $image->save();

        return redirect()->route('image.index', ['position' => $image->position]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('picture.edit')->with(compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $image->title = $request->title;
        $image->position = $request->position;

        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('image')){
            $imagelFileName = $currentMillis . '.' . $request->file('image')->extension();
            $image->url = $request->file('image')->storeAs($image->position, $imagelFileName, 'public');
            $image->url = asset('storage/' . $image->url);
        }

        $image->save();

        return redirect()->route('image.index', ['position' => $image->position]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();

        return redirect()->back();
    }
}
