<?php

namespace App\Http\Controllers;

use App\Models\nomor;
use Illuminate\Http\Request;
use App\Models\kategori_penomoran;

class NomorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'nomor';
        $data['q'] = $request->q;
        $data['nomor'] = Nomor::where('penomoran', 'like', '%' . $request->q . '%')
                        ->join('m_kategori_penomoran', 'm_kategori_penomoran.id_kategori_penomoran', '=', 't_penomoran.id_kategori_penomoran')
                        ->get();

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
        $data['categories'] = $m_kategori_penomoran->kategori;
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

        $m_kategori_penomoran = new kategori_penomoran();
        $nomor->id_kategori_penomoran = $m_kategori_penomoran->id_kategori_penomoran;
        $m_kategori_penomoran->kategori = $get->kategori();

        $nomor = new Nomor();
        $nomor->Dokumen = $request->Dokumen;
        $nomor->Penomoran = $request->Penomoran;
        $nomor->id_kategori_penomoran = $m_kategori_penomoran->id_kategori_penomoran;
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
        $data['categories'] = $nomor->m_kategori_penomoran->kategori;
        // $data['categories'] = $nomor->kategori;
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
