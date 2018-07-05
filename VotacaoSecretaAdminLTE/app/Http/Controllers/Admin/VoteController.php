<?php

namespace App\Http\Controllers\Admin;

use App\Vote;
use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoteController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    public function createOptions($id) {
        return $id;
    }

    public function votos($id) {
        $topic = Topic::find($id);
        return view('admin.criarVotos')->with('topic', $topic);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.createVote');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $options = $request->input('votos');
        foreach ($options as $option) {
            Vote::create([
                'topic_id' => $request->request->get('topic_id'),
                'option' => $option,
                'amount' => '0',
                'default' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        return redirect()->route('temas.show', $request->request->get('topic_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $vote = Vote::find($id);
        $topic_id = $vote->topic_id;
        $vote->delete();
        return redirect()->route('temas.show', $topic_id);
    }

}
