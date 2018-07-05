<?php

namespace App\Http\Controllers\Admin;

use App\UserController;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $decsi = User::where('type',1)->get();
       $decea = User::where('type',2)->get();
       $deenp = User::where('type',3)->get();
       $deelt = User::where('type',4)->get();
       $alunos = User::where('type',5)->get();

       return view('admin.select_users')->with('decsi' ,$decsi)->with('decea' ,$decea)
       ->with('deenp' ,$deenp)->with('deelt' ,$deelt)->with('alunos' ,$alunos);


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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function show(UserController $userController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function edit(UserController $userController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserController $userController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserController $userController)
    {
        //
    }
}
