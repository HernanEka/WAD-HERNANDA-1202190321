<?php

namespace App\Http\Controllers;

use App\Models\Vaksin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Hernanda_vaksin',[ 'vaksin' => Vaksin::all(), 'i' => 1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hernanda_vaksin_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vaksin  = new Vaksin;
        $vaksin->name = $request->vaksin;
        $vaksin->price = $request->harga;
        $vaksin->description = $request->deskripsi;
        $vaksin->image = $request->file('gambar')->store('foto-vaksin');
        $vaksin->save();
        return redirect('/vaksin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaksin = Vaksin::find($id);

        return view('Hernanda_vaksin_update', compact('vaksin'));
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
        $vaksin = Vaksin::find($id);

        $vaksin->name = $request->vaksin;
        $vaksin->price = $request->harga;
        $vaksin->description = $request->deskripsi;

        if($request->gambarbaru){
            Storage::delete($vaksin->image);
            $vaksin->image = $request->file('gambarbaru')->store('foto-vaksin');
        }
        $vaksin->save();
        return view('Hernanda_vaksin_update', compact('vaksin'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaksin = Vaksin::find($Id);

        Storage::delete($vaksin->image);

        $vaksin->delete();

        return redirect('/vaksin');


    }
}
