<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Album::all();
        return view('album.index', compact('rows'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.add');
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
                'id_album' => 'bail|required|unique:Album',
                'nama_photo' => 'required'
            ], 
            [
                'id_album.required' => 'ID wajib diisi',
                'id_album.unique' => 'ID sudah ada',
                'nama_photo.required' => 'Nama wajib diisi'
            ]
            );      
            Album::create([
                'id_album' => $request->id_albun,
                'nama_photo' => $request->nama_photo,
                'text_photo' => $request->text_photo
            ]);
            return redirect('/album'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Album::findOrFail($id);
        return view('album.edit', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Album::findOrFail($id);
        return view('album.edit', compact('row'));
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
                'id_album' => 'bail|required|unique:Album',
                'text_photo' => 'required'
            ], 
            [
                'id_album.required' => 'ID wajib diisi',
                'id_album.unique' => 'ID sudah ada',
                'text_photo.required' => 'Text wajib diisi'
            ]
            );      
            $row = Album::findOrFail($id);
            $row->update([
                'id_album' => $request->id_album,
                'nama_photo' => $request->nama_photo,
                'text_photo' => $request->text_photo
            ]);
            return redirect('/album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Album::findOrFail($id); 
        $row->delete(); 

        return redirect('/album');
    }
}
