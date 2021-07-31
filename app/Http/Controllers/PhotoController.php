<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Photo::all();
        return view('photo.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'judul_photo' => 'bail|required|unique:Photo',
                'text_photo' => 'required'
            ], 
            [
                'judul_photo.required' => 'Judul wajib diisi',
                'judul_photo.unique' => 'Judul sudah ada',
                'text_photo.required' => 'Text wajib diisi'
            ]
            );      
            Photo::create([
                'judul_photo' => $request->judul_photo,
                'text_photo' => $request->text_photo,
                'tanggal_photo' => $request->tanggal_photo
            ]);
            return redirect('/photo'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Photo::findOrFail($id);
        return view('photo.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate(
            [
                'judul_photo' => 'bail|required|unique:Photo',
                'text_photo' => 'required'
            ], 
            [
                'judul_photo.required' => 'Judul wajib diisi',
                'judul_photo.unique' => 'Judul sudah ada',
                'text_photo.required' => 'Text wajib diisi'
            ]
            );      
            $row = Photo::findOrFail($id);
            $row->update([
                'id_photo' => $request->id_photo,
                'judul_photo' => $request->judul_photo,
                'text_photo' => $request->text_photo,
                'tanggal_photo' => $request->tanggal_photo
            ]);
            return redirect('/photo'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Photo::findOrFail($id); 
        $row->delete(); 

        return redirect('/photo');
    }
}
