<?php

namespace App\Http\Controllers;

use App\Models\PenomController;
use App\Http\Requests\StorePenomControllerRequest;
use App\Http\Requests\UpdatePenomControllerRequest;

class PenomControllerController extends Controller
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
        $category = kategori_penomoran::all();
        return view('penom.create', compact('category'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenomControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenomControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PenomController  $penomController
     * @return \Illuminate\Http\Response
     */
    public function show(PenomController $penomController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenomController  $penomController
     * @return \Illuminate\Http\Response
     */
    public function edit(PenomController $penomController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenomControllerRequest  $request
     * @param  \App\Models\PenomController  $penomController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenomControllerRequest $request, PenomController $penomController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenomController  $penomController
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenomController $penomController)
    {
        //
    }
}
