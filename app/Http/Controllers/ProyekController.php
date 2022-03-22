<?php

namespace App\Http\Controllers;

use App\Models\akun_user;
use App\Models\Proyek;
use App\Models\Statusproject;
use App\Models\client;
use App\Models\level_akun_user;
use App\Models\Marketing;
use App\Models\Tim;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Response;

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
        $data['client'] = client::all();
        $data['user'] = Marketing::all();
        $data['status_project'] = Statusproject::all();
        $data['q'] = $request->q;
        $data['proyek'] = Proyek::where('nama_project', 'like', '%' . $request->q . '%')
                            ->join('m_klien', 'm_klien.id_m_klien', '=', 'm_project.id_m_klien')
                            ->join('m_status_project', 'm_status_project.id_status_project', '=', 'm_project.id_status_project')
                            ->get();
        // $data['tim'] = Tim::where('id_project', 'like', '%' . $request->q . '%')
        //                     ->join('m_project', 'm_project.id_project', '=', 't_log_project.id_project')
        //                     ->join('m_user', 'm_user.id_user', '=', 't_log_project.id_user')
        //                     ->get();
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
        //$data['client'] = client::all();
        // $data['status_project'] = Statusproject::all();
        // $data['proyek'] = Proyek::where('status_project', 'like', '%' . $request->q . '%')
        //                      ->join('m_status_project', 'm_status_project.id_status_project', '=', 'm_project.id_status_project')
        //                      ->get();
        // $data['q'] = $request->q;
        return view('proyek.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function tim(Request $request, $id)
    {
        $data['title'] = 'Tambah Tim';
        $data['marketing'] = Marketing::all();
        $data['proyek'] = Proyek::find($id);
        // dd($data['proyek']);
        // $data['status_project'] = Statusproject::all();
        $data['q'] = $request->q;
        $data['tim'] = Tim::where('id_log_project', 'like', '%' . $request->q . '%')
                            ->join('m_project', 'm_project.id_project', '=', 't_log_project.id_project')
                            ->join('m_user', 'm_user.id_user', '=', 't_log_project.id_user')
                            ->get();

        // $data['tim'] = Tim::all();


        return view('proyek.tim', $data);
    }

    public function addTim(Request $request) {
        $tim = Tim::where([
            ['id_project', $request->id_project],
            ['id_user', $request->id_user],
        ])->first();

        if (!$tim) {
            $tim = new Tim();
            $tim->id_project = $request->id_project;
            $tim->id_user = $request->id_user;
            $tim->save();

            return back()->with('success', 'Tambah tim berhasil!');
        } else {
            return back()->with('failed', 'Tim sudah ada!');
        }
    }

    public function deleteTim($id) {
        
        // $data = akun_user::where('id_akun', $id)->get();
        // dd($data[0]->id_level_akun_user);


        $tim = Tim::find($id);
        $tim->delete();

        return back()->with('success', 'Hapus tim berhasil!');
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
            'id_m_klien' => 'required',
            'id_status_project' => 'required',
            'nama_project' => 'required',
            'deskripsi_project' => 'required',
            'waktumulai' => 'required',
            'waktuberakhir' => 'required',
            //'nama_klien' => 'required',
            //'status_project' => 'required',
        ]);

//        dd($request->all());

        $proyek = new Proyek();
        //$proyek['id_m_klien'] = $request->get('client');
        //$proyek['id_status_project'] = $request->get('status_project');
        $proyek->id_m_klien = $request->id_m_klien;
        $proyek->id_status_project = $request->id_status_project;
        $proyek->nama_project = $request->nama_project;
        $proyek->deskripsi_project = $request->deskripsi_project;
        $proyek->waktumulai = $request->waktumulai;
        $proyek->waktuberakhir = $request->waktuberakhir;
        //$proyek->nama_klien = $request->nama_klien;
        //$proyek->status_project = $request->status_project;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        //$proyek->status_project = $request->status_project;
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
        $data['waktumulai'] = ['waktumulai'];
        $data['waktuberakhir'] = ['waktuberakhir'];
        $data['nama_klien'] = ['Klien1', 'Klien2', 'Klien3'];
        $data['status_project'] = ['Masuk', 'Berjalan', 'Pending', 'Selesai'];
        $data['deskripsi_project'] = ['deskripsi_project'];
        $data['proyek'] = $proyek;
        return view('proyek.show', $data);
    }

    public function tambahtim(Request $request)
    {

        $request->validate([
            'id_project' => 'required',
            'id_user' => 'required',
        ]);

        $tim = new tim();
        $tim->id_project = $request->id_project;
        $tim->id_user = $request->id_user;
        $tim->save();
        return redirect('proyek.tim')->with('success', 'Tambah Proyek Berhasil');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyek $proyek)
    {
        // $data['title'] = 'Ubah';
        // $data['row'] = $proyek;
        // $data['categories'] = ['Klien1', 'Klien2', 'Klien3'];
        // $data['proyek'] = Proyek::where('status_project', 'like', '%' .$request->q . '%')
        //                     ->join('m_status_project', 'm_status_project.id_status_project', '=', 'm_project.id_status_project')
        //                     ->get();
        // return view('proyek.edit', $data);
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
            'id_m_klien' => 'required',
            'id_status_project' => 'required',
            'nama_project' => 'required',
            'deskripsi_project' => 'required',
            'waktumulai' => 'required',
            'waktuberakhir' => 'required',
            //'nama_klien' => 'required',
            //'status_project' => 'required',
        ]);


        $proyek->nama_project = $request->nama_project;
        $proyek->waktumulai = $request->waktumulai;
        $proyek->waktuberakhir = $request->waktuberakhir;
        $proyek->deskripsi_project = $request->deskripsi_project;
        $proyek->id_m_klien = $request->id_m_klien;
        $proyek->id_status_project = $request->id_status_project;
        // if ($request->hasFile('image')) {
        //     $post->delete_image();
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
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

    public function getJabatan($id){
        $data = akun_user::where('id_akun', $id)->get();
        // dd($data[0]->level());

        // dd($data);
        $jabatan = level_akun_user::where('id_level_akun_user', $data[0]->id_level_akun_user)->get();
        return json_encode($jabatan);
    }

}
