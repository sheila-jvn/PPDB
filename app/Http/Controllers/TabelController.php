<?php

namespace App\Http\Controllers;

use App\Tabel;
use Illuminate\Http\Request;

class TabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabels = Tabel::latest()->paginate(5);

        return view('tabels.index',compact('tabels'))
            ->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tabels.index');
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
            'nis' => 'required',
            'nama' => 'required',
            'jns_kelamin' => 'required',
            'temp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
        
        Tabel::create($request->all());

        return redirect()->route('tabels.index')
                        ->with('success','Tabel Create Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tabel  $tabel
     * @return \Illuminate\Http\Response
     */
    public function show(Tabel $tabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabel  $tabel
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabel $tabel)
    {
        return view('tabels.edit', compact('tabel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabel  $tabel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabel $tabel)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jns_kelamin' => 'required',
            'temp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
        
        Tabel::create($request->all());

        return redirect()->route('tabels.index')
                        ->with('success','Tabel Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabel  $tabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabel $tabel)
    {
        $tabel->delete();

        return redirect()->route('tabels.index')
                        ->with('success','Tabel deleted successfully.');
    }
}
