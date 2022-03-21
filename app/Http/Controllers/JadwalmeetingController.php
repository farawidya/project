<?php

namespace App\Http\Controllers;

use App\Models\jadwalmeeting;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Auth;

class JadwalmeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data';
        $data['project'] = Proyek::all();
        $data['jadwalmeeting'] = $request->jadwalmeeting;
        $data['jadwalmeeting'] = jadwalmeeting::where('start_date', 'like', '%' . $request->jadwalmeeting . '%')
                                ->join('m_project', 'm_project.id_project', '=', 'm_jadwal_meeting.id_project')
                                ->get();
        return view('jadwalmeeting.jadwalmeeting', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Tambah';
        return view('jadwalmeeting.create', $data);
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
            'id_project' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'tempat' => 'required',
            'agenda' => 'required',
        ]);

        $jadwalmeeting = new jadwalmeeting();
        $jadwalmeeting->id_project = $request->id_project;
        $jadwalmeeting->start_date = $request->start_date;
        $jadwalmeeting->end_date = $request->end_date;
        $jadwalmeeting->tempat = $request->tempat;
        $jadwalmeeting->agenda = $request->agenda;
        $jadwalmeeting->save();
        return redirect()->back()->with('success', 'Tambah Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(jadwalmeeting $jadwalmeeting)
    {
        $data['nama_project'] = ['nama_project'];
        $data['start_date'] = ['start_date'];
        $data['end_date'] = ['end_date'];
        $data['tempat'] = ['tempat'];
        $data['agenda'] = ['agenda'];
        $data['jadwalmeeting'] = $jadwalmeeting;
        return view('jadwalmeeting.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
    * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwalmeeting $jadwalmeeting)
    {
        // $data['title'] = 'Ubah';
        // $data['jadwalmeeting'] = $jadwalmeeting;
        // return view('jadwalmeeting.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejadwalmeetingRequest $request, jadwalmeeting $jadwalmeeting)
    {
        $request->validate([
            'id_project' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'tempat' => 'required',
            'agenda' => 'required',
        ]);

        $jadwalmeeting->id_project = $request->id_project;
        $jadwalmeeting->start_date = $request->start_date;
        $jadwalmeeting->end_date = $request->end_date;
        $jadwalmeeting->tempat = $request->tempat;
        $jadwalmeeting->agenda = $request->agenda;
        $jadwalmeeting->save();
        return redirect()->back()->with('success', 'Tambah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwalmeeting $jadwalmeeting)
    {
        $jadwalmeeting->delete();
        return redirect('jadwalmeeting')->with('success', 'Hapus Berhasil');
    }
}
