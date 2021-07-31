<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Post::all();
        return view('post.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.add');
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
                'id_post' => 'bail|required|unique:Post',
                'judul_post' => 'required'
            ], 
            [
                'id_post.required' => 'ID wajib diisi',
                'id_post.unique' => 'ID sudah ada',
                'judul_post.required' => 'Judul wajib diisi'
            ]
            );      
            Post::create([
                'id_post' => $request->id_post,
                'judul_post' => $request->judul_post,
                'slug_post' => $request->slug_post,
                'text_post' => $request->text_post,
                'tanggal_post' => $request->tanggal_post
            ]);
            return redirect('/post'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Post::findOrFail($id);
        return view('post.edit', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $row = Post::findOrFail($id);
        return view('post.edit', compact('row'));
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
                'id_post' => 'bail|required|unique:Post',
                'judul_post' => 'required'
            ], 
            [
                'id_post.required' => 'ID wajib diisi',
                'id_post.unique' => 'ID sudah ada',
                'judul_post.required' => 'Judul wajib diisi'
            ]
            );      
            $row = Post::findOrFail($id);
            $row->update([
                'id_post' => $request->id_post,
                'judul_post' => $request->judul_post,
                'slug_post' => $request->slug_post,
                'text_post' => $request->text_post,
                'tanggal_post' => $request->tanggal_post
            ]);
            return redirect('/post'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Post::findOrFail($id); 
        $row->delete(); 

        return redirect('/post');
    }
}
