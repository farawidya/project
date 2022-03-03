<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data';
        $data['q'] = $request->q;
        $data['client'] = client::where('nama_perusahaan', 'like', '%' . $request->q . '%')
                            ->get();
        return view('client.index', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah';
        return view('client.create', $data);
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
        $id = $request->id; 
        $request->validate([
            'nama_perusahaan' => 'required',
            'nama_klien' => 'required',
            'bidang' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $client = new client();
        $client->nama_perusahaan = $request->nama_perusahaan;
        $client->nama_klien = $request->nama_klien;
        $client->bidang = $request->bidang;
        $client->email = $request->email;
        $client->no_hp = $request->no_hp;
        $client->alamat = $request->alamat;
        $client->save();
        return redirect()->back()->with('success', 'Tambah Berhasil');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Ubah';
        $data['client'] = $client;
        return view('client.edit', $data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'nama_klien' => 'required',
            'bidang' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        
        $client = client::where('id_m_klien',$id_m_klien)->first();

        $client = client::find($id);
        $client->nama_perusahaan = $request->nama_perusahaan;
        $client->nama_klien = $request->nama_klien;
        $client->bidang = $request->bidang;
        $client->email = $request->email;
        $client->no_hp = $request->no_hp;
        $client->alamat = $request->alamat;
        $client->save();
        return redirect()->route('client.index')
            ->with('success_message', 'Berhasil mengubah client');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        $client->delete();
        return redirect('client')->with('success', 'Hapus Berhasil');
        //
    }
}
