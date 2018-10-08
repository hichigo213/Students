<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PhotoController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Student $student)
    {
        $file = $request->file('file');
        $filename = $request->student_id .'.' . $file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('', $file, $filename);
        Photo::create(['student_id' => $request->student_id, 'photo' => $filename]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photo = Photo::find($id);
            $file = $request->file('file');
            $filename = $photo->photo;
            Storage::disk('public')->putFileAs('', $file, $filename);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
