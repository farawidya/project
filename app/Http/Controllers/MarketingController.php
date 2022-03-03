<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use App\Models\akun_user;
use Illuminate\Http\Request;

class MarketingController extends Controller
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
        $data['marketing'] = Marketing::where('Nama', 'like', '%' . $request->q . '%')
                            ->join('t_akun_user', 't_akun_user.id_akun', '=', 'm_user.id_akun')
                            ->get();
        return view('marketing.marketing', $data);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah';
        return view('marketing.create', $data);
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
            'Nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);
        

        $akun_user = new akun_user;
        $akun_user->username = $request->username;
        $akun_user->password = $request->password;
        $akun_user->level = $request->level;
        $akun_user->save();

        $marketing = new Marketing();
        $marketing->id_akun = $akun_user->id_akun;
        $marketing->Nama = $request->Nama;
        $marketing->alamat = $request->alamat;
        $marketing->email = $request->email;
        $marketing->nohp = $request->nohp;
        $marketing->save();
        // $marketing->username = $request->username;
        // $marketing->password = $request->password;

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        return redirect()->back()->with('success', 'Tambah Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Marketing $marketing)
    {
        $marketing = Marketing::find($id);
        $data['title'] = 'Detail';
        $data['Nama'] = ['Nama'];
        $data['alamat'] = ['alamat'];
        $data['email'] = ['email'];
        $data['nohp'] = ['nohp'];
        $data['username'] = ['username'];
        $data['password'] = ['password'];
        $data['level'] = ['level'];
        $data['marketing'] = $marketing;
        return view('marketing.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Ubah';
        $data['marketing'] = $marketing;
        return view('marketing.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);

        $marketing = Marketing::where('id_user',$id_user)->first();

        $marketing = Marketing::find($id);
        $marketing->id_akun = $akun_user->id_akun;
        $marketing->Nama = $request->Nama;
        $marketing->alamat = $request->alamat;
        $marketing->email = $request->email;
        $marketing->nohp = $request->nohp;
        $akun_user->username = $request->username;
        $akun_user->password = $request->password;
        $akun_user->level = $request->level;
        // if ($request->hasFile('image')) {
        //     $post->delete_image();
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $marketing->save();
        $akun_user->save();
        return redirect()->route('marketing.index')
            ->with('success_message', 'Berhasil mengubah marketing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marketing $marketing)
    {
        // $marketing = Marketing::find($id);

        // if ($id == $request->marketing()->id) return redirect()->route('users.index')
        //     ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');

        // if ($marketing) $marketing->delete();

        // return redirect()->route('users.index')
        //     ->with('success_message', 'Berhasil menghapus user');

        $marketing->delete();
        return redirect('marketing')->with('success', 'Hapus Berhasil');
    }
}