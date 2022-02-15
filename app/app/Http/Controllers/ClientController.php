<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data post';
        $data['q'] = $request->q;
        $data['klien'] = Client::where('nama_client', 'like', '%' . $request->q . '%')->get();
        return view('manclient.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah Post';
        // $data['categories'] = ['Politik', 'Kesehatan', 'Olahraga'];
        return view('manclient.create', $data);
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
            'nama_client' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ]);

        $klien = new Client();
        $klien->nama_client = $request->nama_client;
        $klien->email = $request->email;
        $klien->no_hp = $request->no_hp;
        $klien->pekerjaan = $request->pekerjaan;
        $klien->alamat = $request->alamat;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/client', $name);
        //     $manclient->image = $name;
        // }
        $klien->save();
        return redirect('manclient')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Client $klien)
    {
        return view('manclient.show', [
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $data['title'] = 'Ubah Post';
        $data['klien'] = $client;
        // $data['categories'] = ['Politik', 'Kesehatan', 'Olahraga'];
        return view('manclient.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $klien)
    {
        $request->validate([
            'nama_client' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
        ]);
        
        $klien->nama_client = $klien->nama_client;
        $klien->email = $klien->email;
        $klien->no_hp = $klien->no_hp;
        $klien->pekerjaan = $klien ->pekerjaan;
        $klien->alamat = $klien ->alamat;
        // if ($request->hasFile('image')) {
        //     $manclient->delete_image();
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/client', $name);
        //     $manclient->image = $name;
        // }
        $klien->save();
        return redirect('manclient')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client $manclient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $klien)
    {
        // $klien->delete_image();
        $klien->delete();
        return redirect('manclient')->with('success', 'Hapus Data Berhasil');
    }
}