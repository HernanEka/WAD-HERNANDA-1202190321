<?php

namespace App\Http\Controllers;

use App\Models\Vaksin;
use App\Models\Pasien;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = Pasien::all();
        $i = 1;
        return view('Hernanda_pasien', compact('pasien','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaksin = Vaksin::all();
        return view('Hernanda_pilih_vaksin', compact('vaksin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasien = new Pasien;
        $pasien->vaksin_id = $request->vaksin;
        $pasien->name = $request->nama;
        $pasien->nik = $request->nik;
        $pasien->alamat = $request->alamat;
        $pasien->image_ktp = $request->file('ktp')->store('foto-ktp');
        $pasien->no_hp = $request->no_hp;
        $pasien->save();

        return redirect('/pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vaksin = Vaksin::find($id);
        return view('Hernanda_pasien_tambah', compact('vaksin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('Hernanda_pasien_update', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::find($id);

        Storage::delete($pasien->image_ktp);

        $pasien->delete();

        return redirect('/pasien');

    }
}
