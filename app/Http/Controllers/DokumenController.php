<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Statusproject;
use App\Models\Proyek;
use App\Models\m_dokumen;
use App\Models\kategori_penomoran;
use App\Models\log_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $data['proyek'] = Proyek::where('nama_project', 'like', '%' . $request->q . '%')
                            ->join('m_klien', 'm_klien.id_m_klien', '=', 'm_project.id_m_klien')
                            ->get();
        // return view('dokumen.index')->compact('data');
        return view('dokumen.index', $data);
        //
    }

    public function view(Request $request)
    {
        $data['title'] = 'Data';
        $data['q'] = $request->q;
        $data['proyek'] = Proyek::all();
        $data['kategori_penomoran'] = kategori_penomoran::all();
        $data['dokumen'] = Dokumen::where('dokumen', 'like', '%' . $request->q . '%')
                            ->join('m_kategori_penomoran', 'm_kategori_penomoran.id_kategori_penomoran', '=', 't_dokumen_status_project.id_kategori_penomoran')
                            ->join('m_dokumen', 'm_dokumen.id_dokumen', '=', 't_dokumen_status_project.id_dokumen')
                            ->join('t_log_project', 't_log_project.id_log_project', '=', 't_dokumen_status_project.id_log_project')
                            ->join('m_project', 'm_project.id_project', '=', 't_log_project.id_project')
                            ->get();
        // return view('dokumen.index')->compact('data');
        return view('dokumen.view', $data);
        //
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Tambah';
        return view('dokumen.create', $data);
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
            'id_kategori_penomoran' => 'required',
            'id_log_project' => 'required',
            'judul_dokumen' => 'required',
            'dokumen' => 'required',
            
        ]);
        
        // $nm = $request->dokumen;
        // $namaFile = $nm->getClientOriginalName();

            
            // $m_dokumen->dokumen= $request->namaFile;
            // $nm->move(public_path().'/dokumenproject', $namaFile);
            // if ($request->hasFile('dokumen')) {
            //     $dokumen = $request->file('dokumen');
            //     $name = time()."_".$file->getClientOriginalName();
            //     //$path = $request->file('fot)->storeAs('public/posts_image’, $name);
            //     $dokumen->move('/dokumen', $name);
            //     $m_dokumen->dokumen = $name;
            // }   else{

            // } 

            // if($request->hasFile('dokumen')){
            //     $filenameWithExt = $request->file('dokumen')->getClientOriginalName();
            //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //     $extension = $request->file('dokumen')->getClientOriginalExtension();
            //     $filenameSimpan = $filename.'_'.time().'.'.$extension;
            //     $path = $request->file('dokumen')->storeAs('', $filenameSimpan);
                
            // }else{

            // }
            $m_dokumen = new m_dokumen();
            $m_dokumen->judul_dokumen= $request->judul_dokumen;   
            $m_dokumen->dokumen = $filenameSimpan;
            $m_dokumen->save();        

            $dokumen = new Dokumen();
            $dokumen->id_dokumen = $m_dokumen->id_dokumen;
            $dokumen->id_log_project = $request->id_log_project;
            $dokumen->id_kategori_penomoran = $request->id_kategori_penomoran;
            $dokumen->save();

        
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
        return view('dokumen.view', $data);
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
