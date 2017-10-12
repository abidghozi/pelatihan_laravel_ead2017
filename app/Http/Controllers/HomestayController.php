<?php

namespace App\Http\Controllers;

use App\Homestay;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Homestay::all();
        return view('homestays.index', ['datas'=> $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('homestays.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $store = Homestay::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'deskripsi'=>$request->deskripsi,
            'harga'=>$request->harga,
            'status'=>'Open'
        ]);
        return redirect(route('homestay.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function show(Homestay $homestay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function edit(Homestay $homestay)
    {
        //
        return view('homestays.edit', ['homestay'=> $homestay]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homestay $homestay)
    {
        //
        $update = Homestay::where('id', $homestay->id)->update([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'deskripsi'=>$request->deskripsi,
            'harga'=>$request->harga,
        ]);
        return redirect(route('homestay.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homestay $homestay)
    {
        //
        $destroy = Homestay::destroy($homestay->id);
        return redirect(route('homestay.index'));
    }
}
