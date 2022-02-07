<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use App\Http\Requests\StorekegiatanRequest;
use App\Http\Requests\UpdatekegiatanRequest;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorekegiatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekegiatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekegiatanRequest  $request
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekegiatanRequest $request, kegiatan $kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kegiatan $kegiatan)
    {
        //
    }
}
