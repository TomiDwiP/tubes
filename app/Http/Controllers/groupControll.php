<?php

namespace App\Http\Controllers;

use App\group;
use App\instansi;

use Illuminate\Http\Request;

class groupControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = group::all()->toArray();
        return view('group.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group = $this->validate(request(), [
        'nimKetua' => 'required | numeric',
        'nimAnggota1' => '',
        'nimAnggota2' => '',
        'namainstansi' => 'required',
        'waktu_pelaksaan' => 'required',
        'waktu_selesai' => 'required'

        ]);

        group::create($group);

        $instansi = $this->validate(request(),[
        'namainstansi' => 'required',
        'alamat' => 'required',
        'telp' => 'required | numeric',
        'email' => 'required|email'
        ]);

        instansi::create($instansi);

        return back()-> with('succes','data berhasil ditambahkan');;

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
        $group = group::find($id);
        return view('group.edit',compact('group','id'));

        $instansi = instansi::find($id);
        return view('group.edit',compact('group','id'));
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
        $group = group::find($id);
        $this->validate(request(), [
  		'nimKetua' => 'required | numeric',
        'nimAnggota1' => '',
        'nimAnggota2' => '',
        'namainstansi' => '',
        'waktu_pelaksaan' => 'required',
        'waktu_selesai' => 'required'
        ]);

        $mahasiswa->nimKetua= $request->get('nim-ketua');
        $group->nimAnggota1= $request->get('nim-anggota1');
        $group->nimAnggota2= $request->get('nim-anggota2');
        $group->namainstansi= $request->get('namainstansi');
        $group->waktu_pelaksaan= $request->get('waktu-pelaksaan');
        $group->waktu_selesai= $request->get('waktu-selesai');

        $instansi = instansi::find($id);
        $this->validate(request(), [
  		'namainstansi' => 'required',
        'alamat' => 'required',
        'telp' => 'required | numeric',
        'email' => 'required|email'
        ]);

        $instansi->namainstansi= $request->get('namainstansi');
        $instansi->alamat= $request->get('alamat');
        $instansi->telp= $request->get('telp');
        $instansi->email= $request->get('email');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
