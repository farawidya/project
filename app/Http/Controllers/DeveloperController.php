<?php

namespace App\Http\Controllers;

use App\Models\developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data';
        $data['categories'] = ['Laki-Laki', 'Perempuan'];
        $data['q'] = $request->q;
        $data['mandev'] = Developer::where('nama', 'like', '%' . $request->q . '%')->get();
        return view('mandev.developer', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah';
        $data['categories'] = ['Laki-Laki', 'Perempuan'];
        return view('mandev.create', $data);
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
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
            'gmail' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $mandev = new Developer();
        $mandev->nama = $request->nama;
        $mandev->jenis_kelamin = $request->jenis_kelamin;
        $mandev->no_telp = $request->no_telp;
        $mandev->gmail = $request->gmail;
        $mandev->username = $request->username;
        $mandev->password = $request->password;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $mandev->gmail = $request->gmail;
        $mandev->save();
        return redirect('mandev')->with('success', 'Tambah Berhasil');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Developer $mandev)
    {
        $data['title'] = 'Detail';
        $data['nama'] = ['Nama'];
        $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
        $data['no_telp'] = ['No Telp'];
        $data['gmail'] = ['gmail'];
        $data['mandev'] = $mandev;
        return view('mandev.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Developer $mandev)
    {
        $data['title'] = 'Ubah';
        $data['mandev'] = $mandev;
        $data['categories'] = ['Laki-Laki', 'Perempuan'];
        return view('mandev.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Developer $mandev)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
            'gmail' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $mandev->nama = $request->nama;
        $mandev->jenis_kelamin = $request->jenis_kelamin;
        $mandev->no_telp = $request->no_telp;
        $mandev->gmail = $request->gmail;
        $mandev->username = $request->username;
        $mandev->password = $request->password;
        // if ($request->hasFile('image')) {
        //     $post->delete_image();
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $mandev->save();
        return redirect('mandev')->with('success', 'Ubah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Developer $mandev)
    {
        // $marketing->delete_image();
        $mandev->delete();
        return redirect('mandev')->with('success', 'Hapus Berhasil');
    }
}

