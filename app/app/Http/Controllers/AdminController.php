<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
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
        $data['rows'] = Admin::where('nama_admin', 'like', '%' . $request->q . '%')->get();
        return view('manadmin.index', $data);
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
        return view('manadmin.create', $data);
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
            'nama_admin' => 'required',
        ]);

        $manadmin = new Admin();
        $manadmin->nama_admin = $request->nama_admin;
        $manadmin->email = $request->email;
        $manadmin->no_hp = $request->no_hp;
        $manadmin->username = $request->username;
        $manadmin->password = $request->password;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/admin', $name);
            $manadmin->image = $name;
        }
        $manadmin->save();
        return redirect('manadmin')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $manadmin)
    {
        return view('manadmin.show', [
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $manadmin)
    {
        $data['title'] = 'Ubah Post';
        $data['row'] = $manadmin;
        // $data['categories'] = ['Politik', 'Kesehatan', 'Olahraga'];
        return view('manadmin.edit', $manadmin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $manadmin)
    {
        $request->validate([
            'nama_admin' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',

        ]);

        $manadmin->nama_admin = $manadmin->nama_admin;
        $manadmin->email = $manadmin->email;
        $manadmin->no_hp = $manadmin->no_hp;
        $manadmin->username = $manadmin->username;
        $manadmin->password =$manadmin->password;
        if ($request->hasFile('image')) {
            $manadmin->delete_image();
            $image = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/admin', $name);
            $manadmin->image = $name;
        }
        $manadmin->save();
        return redirect('manadmin')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin $mandmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $manadmin)
    {
        // $manadmin->delete_image();
        $manadmin->delete();
        return redirect('manadmin')->with('success', 'Hapus Data Berhasil');
    }
}