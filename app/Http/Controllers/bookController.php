<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\list_buku;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createbook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'kategori'=>'required',
            'deskripsi'=>'required',
            'jumlah'=>'required',
            'file' => 'required|mimes:pdf|max:2048',
            'cover' => 'required|image|max:2048',
        ]);

        $book = list_buku::create([
            'judul'=>$request->input('judul'),
            'kategori'=>$request->input('kategori'),
            'deskripsi'=>$request->input('deskripsi'),
            'jumlah'=>$request->input('jumlah'),
            'file'=>$request->file('file')->store('pdfs'),
            'cover'=>$request->file('cover')->store('covers'),
        ]);

        return redirect('/admindashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
