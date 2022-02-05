<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class managementdeveloper extends Controller
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
        $data['developer'] = developer::where('Nama', 'like', '%' . $request->q . '%')->get();
        return view('developer.developer', $data);
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
        return view('developer.create', $data);
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
            'Jenis_kelamin' => 'required',
            'no_telp' => 'required',
            'gmail' => 'required',
        ]);

        $developer = new developer();
        $developer->Nama = $request->Nama;
        $developer->Jenis_kelamin = $request->Jenis_kelamin;
        $developer->no_telp = $request->no_telp;
        $developer->gmail = $request->gmail;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $developer->gmail = $request->gmail;
        $developer->save();
        return redirect('developer')->with('success', 'Tambah Berhasil');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = 'Detail';
        $data['Nama'] = ['Nama'];
        $data['Jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
        $data['No Telp'] = ['No Telp'];
        $data['gmail'] = ['gmail'];
        $data['developer'] = $developer;
        return view('developer.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(developer $developer)
    {
        $data['title'] = 'Ubah';
        $data['row'] = $developer;
        $data['categories'] = ['Laki-Laki', 'Perempuan'];
        return view('developer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, developer $developer)
    {
        $request->validate([
            'Nama' => 'required',
            'Jenis_kelamin' => 'required',
            'no_telp' => 'required',
            'gmail' => 'required',
        ]);

        $developer->Nama = $request->Nama;
        $developer->Jenis_kelamin = $request->Jenis_kelamin;
        $developer->no_telp = $request->no_telp;
        $developer->gmail = $request->gmail;
        // if ($request->hasFile('image')) {
        //     $post->delete_image();
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $developer->save();
        return redirect('developer')->with('success', 'Ubah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(developer $developer)
    {
        // $developer->delete_image();
        $developer->delete();
        return redirect('developer')->with('success', 'Hapus Berhasil');
    }
}
