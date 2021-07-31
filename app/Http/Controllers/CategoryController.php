<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Category::all();
        return view('category.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.add');
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
                'id_category' => 'bail|required|unique:Category',
                'nama_category' => 'required'
            ], 
            [
                'id_category.required' => 'ID wajib diisi',
                'id_category.unique' => 'ID sudah ada',
                'nama_category.required' => 'Text wajib diisi'
            ]
            );      
            Category::create([
                'id_category' => $request->id_category,
                'nama_category' => $request->nama_category,
                'text_category' => $request->text_category
            ]);
            return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Category::findOrFail($id);
        return view('category.edit', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Category::findOrFail($id);
        return view('category.edit', compact('row'));
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
                'id_category' => 'bail|required|unique:Category',
                'nama_category' => 'required'
            ], 
            [
                'id_category.required' => 'ID wajib diisi',
                'id_category.unique' => 'ID sudah ada',
                'nama_category.required' => 'Nama wajib diisi'
            ]
            );      
            $row = Category::findOrFail($id);
            $row->update([
                'id_category' => $request->id_category,
                'nama_category' => $request->nama_category,
                'text_category' => $request->text_category
            ]);
            return redirect('/category'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Category::findOrFail($id); 
        $row->delete(); 

        return redirect('/category');
    }
}
