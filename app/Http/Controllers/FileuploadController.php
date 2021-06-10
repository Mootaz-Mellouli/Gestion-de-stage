<?php

namespace App\Http\Controllers;

use App\fileupload;
use Illuminate\Http\Request;

class FileuploadController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('uploadedfile');
        $filename= $file->getClientOriginalName();
        $filename = time(). '.' .$filename;

        $path = $file->storeAs('public', $filename);
        Fileupload::create([
            'filename' => $filename,
        ]);
        $savedfile = Fileupload::latest()->firstOrFail();
        return redirect()->back()->with('message', 'Votre PFE est ajouté avec succès!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function show(fileupload $fileupload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function edit(fileupload $fileupload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fileupload $fileupload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function destroy(fileupload $fileupload)
    {
        //
    }
}
