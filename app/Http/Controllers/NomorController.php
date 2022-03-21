<?php

namespace App\Http\Controllers;

use App\Models\nomor;
use Illuminate\Http\Request;
use App\Models\client;
use App\Models\proyek;
use App\Models\m_dokumen;
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
        $data['kategori_penomoran'] = kategori_penomoran::all();
        $data['proyek'] = proyek::all();
        $data['nomor'] = Nomor::where('penomoran', 'like', '%' . $request->q . '%')
                        ->join('m_kategori_penomoran', 'm_kategori_penomoran.id_kategori_penomoran', '=', 't_dokumen_penomoran.id_kategori_penomoran')
                        ->join('m_dokumen', 'm_dokumen.id_dokumen', '=', 't_dokumen_penomoran.id_dokumen')
                        ->join('m_project', 'm_project.id_project', '=', 't_dokumen_penomoran.id_project')
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
            'tanggal'=>'required',
            'judul_dokumen' => 'required',
            'dokumen' => 'required',
            'penomoran' => 'required',
            'kategori_penomoran' => 'required',
        ]);

        // $kodeawal = Kategori_Penomoran::where('kode', 'like', '%' . $request->q . '%');
        // $no = 1;
        // if($noUrutAkhir) {
        //     echo "No urut surat di database : " . $noUrutAkhir;
        //     echo "<br>";
        //     echo "Pake Format : " . {{ $dokumen->kategori_penomoran }}. '/' . date() .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
        // }
        // else {
        //     echo "No urut surat di database : 0" ;
        //     echo "<br>";
        //     echo "Pake Format : " . sprintf("%03s", $no). '/' . $AWAL .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
        // }

        $m_dokumen = new m_dokumen();
            $m_dokumen->judul_dokumen= $request->judul_dokumen;
            // $m_dokumen->dokumen= $request->namaFile;
            // $nm->move(public_path().'/dokumenproject', $namaFile);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'file/dokumenproject', $name);
            $m_dokumen->dokumen = $name;
        }    
            $m_dokumen->save();

            $nomor = new Nomor();
            $dokumen->id_dokumen = $m_dokumen->id_dokumen;
            $nomor->tanggal = $request->tanggal;
            $nomor->penomoran = $request->penomoran;
            $nomor->id_kategori_penomoran = $request->id_kategori_penomoran;
            $nomor->id_project = $request->id_project;
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
