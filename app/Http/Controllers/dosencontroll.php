<?php

namespace App\Http\Controllers;
use App\dosen;

use Illuminate\Http\Request;    

class dosencontroll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosens = dosen::all()->toArray();
        return view('admin/dosen.indexdosen', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/dosen.createdosen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = $this->validate(request(), [
        'nid' => 'required | numeric',
        'nama' => 'required',
        'email' => 'required|email',
        'password' => 'required'
        
        ]);

        dosen::create($dosen);

        return redirect('admin')->with('success','Data has been deleted');
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
        $dosen = dosen::find($id);
        return view('admin/dosen.editdosen',compact('dosen','id'));
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
        $dosen = dosen::find($id);
        $this->validate(request(), [
        'nid' => 'required | numeric',
        'nama' => 'required',
        'email' => 'required|email',
        'password' => 'required'
        ]);

        $dosen->nid= $request->get('nid');
        $dosen->nama= $request->get('nama');
        $dosen->email= $request->get('email');
        $dosen->password= $request->get('password');
        $dosen->save();


        return redirect('admin/dosen')->with('success','Data has been deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = dosen::find($id);
        $dosen->delete();
        return redirect('admin/dosen')->with('success','Data has been deleted');
    }
}
