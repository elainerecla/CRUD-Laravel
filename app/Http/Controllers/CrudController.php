<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Hash;
use Session;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login = Login::all();
        return view('pages.users')->with('login', $login);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'txtFullname' => 'required',
            'txtUsername' => 'required',
            'txtEmail' => 'required',
            'txtPassword' => 'required',
            'txtRetypePassword' => 'required',
        ]);

        if($request->input('txtPassword') == $request->input('txtRetypePassword')){
            //Create user
            $login = new Login();
            $login->fullname = $request->input('txtFullname');
            $login->username = $request->input('txtUsername');
            $login->emailadd = $request->input('txtEmail');
            $login->password = Hash::make($request->input('txtPassword'));
            $login->role = 1;
            $login->status = 1;
            $login->save();

            return redirect('/users');
        }else{
            return 'mismatch password';
        }
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
        $this->validate($request, [
            'txtUsername' => 'required',
            'txtEmail' => 'required'
        ]);

        //Update user
        $login = Login::find($id);
        $login->username = $request->input('txtUsername');
        $login->emailadd = $request->input('txtEmail');
        $login->save();

        Session::flash('success', 'Successfully updated!');
        Session::flash('alert-class', 'alert-success');

        return redirect('/users');
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
