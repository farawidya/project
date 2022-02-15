<?php

namespace App\Http\Controllers;

use App\Models\Mom;
use Illuminate\Http\Request;

class MomController extends Controller
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
        $data['mom'] = Mom::where('nama_project', 'like', '%' . $request->q . '%')->get();
        return view('mom.mom', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah';
        // $data['categories'] = ['Laki-Laki', 'Perempuan'];
        return view('mom.create', $data);
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
            'tanggal' => 'required',
            'tempat' => 'required',
            'agenda' => 'required',
            'hasil' => 'required',
        ]);

        $mom = new Mom();
        $mom->nama_project = $request->nama_project;
        $mom->tanggal = $request->tanggal;
        $mom->tempat = $request->tempat;
        $mom->agenda = $request->agenda;
        $mom->hasil = $request->hasil;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $mom->hasil = $request->hasil;
        $mom->save();
        return redirect('mom')->with('success', 'Tambah Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Mom $mom)
    {
        return view('mom.show', [
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Mom $mom)
    {
        $data['title'] = 'Ubah';
        $data['row'] = $mom;
        // $data['categories'] = ['Laki-Laki', 'Perempuan'];
        return view('mom.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mom $mom)
    {
        $request->validate([
            'nama_project' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'agenda' => 'required',
            'hasil' => 'required',
        ]);

        $mom->nama_project = $request->nama_project;
        $mom->tanggal = $request->tanggal;
        $mom->tempat = $request->tempat;
        $mom->agenda = $request->agenda;
        $mom->hasil = $request->hasil;
        // if ($request->hasFile('image')) {
        //     $post->delete_image();
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $mom->hasil = $request->hasil;
        $mom->save();
        return redirect('mom')->with('success', 'Ubah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mom $mom)
    {
        // $marketing->delete_image();
        $mom->delete();
        return redirect('mom')->with('success', 'Hapus Berhasil');
    }
}