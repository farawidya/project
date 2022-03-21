<?php

namespace App\Http\Controllers;

use App\Models\Mom;
use App\Models\jadwalmeeting;
use App\Models\Proyek;
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
        $data['jadwalmeeting'] = jadwalmeeting::all();
        $data['proyek'] = Proyek::all();
        $data['q'] = $request->q;
        $data['mom'] = Mom::where('hasil_pembahasan', 'like', '%' . $request->q . '%')
                        ->join('m_jadwal_meeting', 'm_jadwal_meeting.id_jadwal_meeting', '=', 't_mom.id_jadwal_meeting')
                        ->join('m_project', 'm_project.id_project', '=', 'm_jadwal_meeting.id_project')
                        ->get();
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
            'id_jadwal_meeting' => 'required',
            'hasil_pembahasan' => 'required',
        ]);

        $mom = new Mom();
        $mom->id_jadwal_meeting = $request->id_jadwal_meeting;
        $mom->hasil_pembahasan = $request->hasil_pembahasan;
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

    public function edit(Mom $id_mom)
    {
    $where = array('id_mom' => $id_mom);
            $post  = Mom::where($where)->first();
        
            return response()->json($post);
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
            'id_jadwal_meeting' => 'required',
            'hasil_pembahasan' => 'required',
        ]);

        $mom = new Mom();
        $mom->id_jadwal_meeting = $request->id_jadwal_meeting;
        $mom->hasil_pembahasan = $request->hasil_pembahasan;
        $mom->save();
        return redirect('mom')->with('success', 'Tambah Berhasil');
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