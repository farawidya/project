<?php

namespace App\Http\Controllers;

use App\Models\nomor;
use Illuminate\Http\Request;

class NomorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Dokumen';
        $data['categories'] = ['kategori1', 'kategori2', 'kategori3'];
        $data['q'] = $request->q;
        $data['nomor'] = Nomor::where('dokumen', 'like', '%' . $request->q . '%')->get();
        return view('nomor.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $data['title'] = 'Tambah';
         $data['categories'] = ['kategori1', 'kategori2', 'kategori3'];
        return view('nomor.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'Dokumen' => 'required',
            'Penomoran' => 'required',
            'Kategori' => 'required',
        ]);

        $nomor = new Nomor();
        $nomor->Dokumen = $request->Dokumen;
        $nomor->Penomoran = $request->Penomoran;
        $nomor->Kategori = $request->Kategori;
        $nomor->save();
         return redirect('nomor')->with('success', 'Tambah Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function show(nomor $nomor)
    {
          return view('nomor.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function edit(nomor $nomor)
   {
        $data['title'] = 'Ubah';
        $data['list'] = $nomor;
         $data['categories'] = ['kategori1', 'kategori2', 'kategori3'];
        // $data['categories'] = ['Laki-Laki', 'Perempuan'];
        return view('nomor.edit', $data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nomor $nomor)
    {
            $request->validate([
            'Dokumen' => 'required',
            'Penomoran' => 'required',
            'Kategori' => 'required',
        ]);

        $nomor = new Nomor();
        $nomor->Dokumen = $request->Dokumen;
        $nomor->Penomoran = $request->Penomoran;
        $nomor->Kategori = $request->Kategori;
        $nomor->save();
         return redirect('nomor')->with('success', 'Tambah Berhasil');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nomor  $nomor
     * @return \Illuminate\Http\Response
     */
    public function destroy(nomor $nomor)
    {
        $nomor->delete();
        return redirect('nomor')->with('success', 'Hapus Data Berhasil');
    }
}
