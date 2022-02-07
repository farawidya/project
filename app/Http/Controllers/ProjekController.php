<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use Illuminate\Http\Request;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data Post';
        $data['q'] = $request->q;
        $data['list'] = Projek::where('Nama', 'like', '%' . $request->q . '%')->get();
        return view('projek.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah';
        return view('projek.create',$data);
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
            'Nama' => 'required',
            'Username' => 'required',
            'Email' => 'required',
        ]);

        $projek = new Projek();
        $projek->Nama = $request->Nama;
        $projek->Username = $request->Username;
        $projek->Email = $request->Email;
        $projek->save();
         return redirect('projek')->with('success', 'Tambah Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function show(Projek $projek)
    {
        return view('projek.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function edit(Projek $projek)
    {
        $data['title'] = 'Ubah';
        $data['list'] = $projek;
        // $data['categories'] = ['Laki-Laki', 'Perempuan'];
        return view('projek.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projek $projek)
  {
        $request->validate([
            'Nama' => 'required',
            'Username' => 'required',
            'Email' => 'required',
        ]);

        $projek = new Projek();
        $projek->Nama = $request->Nama;
        $projek->Username = $request->Username;
        $projek->Email = $request->Email;
        $projek->save();
         return redirect('projek')->with('success', 'Tambah Berhasil');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projek $projek)
    {
        // $projek->delete_image();
        $projek->delete();
        return redirect('projek')->with('success', 'Hapus Data Berhasil');
    }
}
