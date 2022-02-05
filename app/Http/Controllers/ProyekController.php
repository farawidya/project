<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data';
        $data['categories'] = ['Klien1', 'Klien2', 'Klien3'];
        $data['statusproject'] = ['Testing', 'Done', 'Doing'];
        $data['q'] = $request->q;
        $data['proyek'] = Proyek::where('nama_project', 'like', '%' . $request->q . '%')->get();
        return view('proyek.proyek', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah';
        $data['categories'] = ['Klien1', 'Klien2', 'Klien3'];
        $data['statusproject'] = ['Testing', 'Done', 'Doing'];
        return view('proyek.create', $data);
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
            'nama_project' => 'required',
            'deskripsi_project' => 'required',
            'nama_klien' => 'required',
            'waktu' => 'required',
            'status_project' => 'required',
        ]);

        $proyek = new Proyek();
        $proyek->nama_project = $request->nama_project;
        $proyek->deskripsi_project = $request->deskripsi_project;
        $proyek->nama_klien = $request->nama_klien;
        $proyek->waktu = $request->waktu;
        $proyek->status_project = $request->status_project;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $proyek->status_project = $request->status_project;
        $proyek->save();
        return redirect('proyek')->with('success', 'Tambah Proyek Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Proyek $proyek)
    {
        $data['title'] = 'Detail';
        $data['nama_project'] = ['nama_project'];
        $data['nama_klien'] = ['Klien1', 'Klien2', 'Klien3'];
        $data['status_project'] = ['Testing', 'Done', 'Doing'];
        $data['deskripsi_project'] = ['deskripsi_project'];
        $data['waktu'] = ['waktu'];
        $data['proyek'] = $proyek;
        return view('proyek.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyek $proyek)
    {
        $data['title'] = 'Ubah';
        $data['row'] = $proyek;
        $data['categories'] = ['Klien1', 'Klien2', 'Klien3'];
        $data['statusproject'] = ['Testing', 'Done', 'Doing'];
        return view('proyek.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyek $proyek)
    {
        $request->validate([
            'nama_project' => 'required',
            'deskripsi_project' => 'required',
            'nama_klien' => 'required',
            'waktu' => 'required',
            'status_project' => 'required',
        ]);

        $proyek->nama_project = $request->nama_project;
        $proyek->deskripsi_project = $request->deskripsi_project;
        $proyek->nama_klien = $request->nama_klien;
        $proyek->waktu = $request->waktu;
        $proyek->status_project = $request->status_project;
        // if ($request->hasFile('image')) {
        //     $post->delete_image();
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $proyek->status_project = $request->status_project;
        $proyek->save();
        return redirect('proyek')->with('success', 'Ubah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyek $proyek)
    {
        // $proyek->delete_image();
        $proyek->delete();
        return redirect('proyek')->with('success', 'Hapus Berhasil');
    }
}