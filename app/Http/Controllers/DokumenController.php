<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Status_Project;
use Illuminate\Http\Request;

class DokumenController extends Controller
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
        $data['dokumen'] = Dokumen::where('dokumen', 'like', '%' . $request->q . '%')
                            ->join('t_status_project', 't_status_project.id_status_project', '=', 't_dokumen_status_project.id_status_project')
                            ->join('t_log_project', 't_log_project.id_log_project', '=', 't_dokumen_status_project.id_log_project')
                            ->get();
        return view('dokumen.index', $data);
        //
    }

    public function getStatusProject(Request $request)
    {
        $id_dokumen_status_project = $request->id_dokumen_status_project;

        $status_project = Status_Project::where('province_id',$id_status_project)->get();

        foreach($status_project as $m_status_project)
        {
            echo "<option value='$m_status_project->id'>$m_status_project->status_project</option>";
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'status_project' => 'required',
            'dokumen' => 'required',
            
        ]);
        
        $nm = $request->dokumen;
        $namaFile = $nm->getClientOriginalName();

            $dokumen = new Dokumen();
            $dokumen->id_status_project = $status_project->id_status_project;
            $dokumen->dokumen= $request->namaFile;
            $nm->move(public_path().'/img', $namaFile);
            $dokumen->save();

        // $dokumen->username = $request->username;
        // $dokumen->password = $request->password;

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        return redirect()->back()->with('success', 'Tambah Berhasil');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function show(Dokumen $dokumen)
    {
        $data['title'] = 'Detail';
        $data['status_project'] = ['status_project'];
        $data['dokumen'] = $dokumen;
        return view('dokumen.show', $data);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokumen $dokumen)
    {
        $data['title'] = 'Ubah';
        $data['dokumen'] = $dokumen;
        return view('dokumen.edit', $data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokumen $dokumen)
    {
        $request->validate([
            'Nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'gmail' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $dokumen = Dokumen::find($id);
        $dokumen->id_akun = $akun_user->id_akun;
        $dokumen->Nama = $request->Nama;
        $dokumen->alamat = $request->alamat;
        $dokumen->email = $request->email;
        $dokumen->nohp = $request->nohp;
        $akun_user->username = $request->username;
        $akun_user->password = $request->password;
        // if ($request->hasFile('image')) {
        //     $post->delete_image();
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $dokumen->save();
        $akun_user->save();
        return redirect()->route('dokumen.index')
            ->with('success_message', 'Berhasil mengubah dokumen');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokumen $dokumen)
    {
        $dokumen = Dokumen::find($id);

        if ($id == $request->dokumen()->id) return redirect()->route('users.index')
            ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');

        if ($dokumen) $dokumen->delete();

        return redirect()->route('users.index')
            ->with('success_message', 'Berhasil menghapus user');
        //
    }
}
