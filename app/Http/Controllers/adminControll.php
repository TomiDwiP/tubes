<?php

namespace App\Http\Controllers;

use App\Admin;
use Auth;

use Illuminate\Http\Request;

class adminControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = admin::all()->toArray();
        return view('admin/crudadmin.indexadmin', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/crudadmin.createadmin');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6'
        ]);

        admin::create($admin);

        return redirect('admin')->with('success','Data has add');
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
        $admin = admin::find($id);
        return view('admin/crudadmin.editadmin',compact('admin','id'));
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
        $admin = admin::find($id);
        $this->validate(request(), [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|min;6'
        ]);

        $admin->name= $request->get('name');
        $admin->email= $request->get('email');
        $admin->password= $request->get('password');
        $admin->save();


        return redirect('admin/crudadmin')->with('success','Data has been deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = admin::find($id);
        $admin->delete();
        return redirect('admin/crudadmin')->with('success','Data has been deleted');
    }
}
