<?php

namespace App\Http\Controllers\Users;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;

class TopicController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {//Todos os topicos para cadastrados
        $topics = Topic::orderBy('created_at', 'DESC')->paginate(10);
        return view('users.indexTopic')->with('topics', $topics);
    }

    public function votei() {
        $topics = Topic::orderBy('created_at', 'DESC')->paginate(10);
        return view('users.votados')->with('topics', $topics);
    }

    public function canVote() {
        $topics = Topic::orderBy('created_at', 'DESC')->paginate(10);
        return view('users.canVote')->with('topics', $topics);
    }

    public function search(Request $request) {
        $topics = Topic::where('title', 'like', '%' . $request->input('search') . '%')
                        ->orWhere('description', 'like', '%' . $request->input('search') . '%')->get();

        return view('users.indexTopic')->with('topics', $topics);
    }

    public function searchForm() {
        return view('users.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $topic = Topic::find($id);
        return view('users.showTopic')->with('topic', $topic);
    }

    public function votar($id) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
