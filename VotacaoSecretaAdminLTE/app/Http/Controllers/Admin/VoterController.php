<?php

namespace App\Http\Controllers\Admin;

use App\Voter;
use Illuminate\Http\Request;
use App\User;
use App\Topic;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class VoterController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teste() {
        $id_topic = request()->route('id');
        $all = User::all();
        $voters = Voter::where('topic_id', $id_topic)->get();
        return view('admin.select_users')->with('all', $all)
                        ->with('topic', $id_topic)->with('voters', $voters);
    }

    public function find(Request $request) {

        return $request->all();
        $decsi = User::where('type', 1)->get();
        $decea = User::where('type', 2)->get();
        $deenp = User::where('type', 3)->get();
        $deelt = User::where('type', 4)->get();
        $alunos = User::where('type', 5)->get();

        return view('admin.select_users')->with('decsi', $decsi)->with('decea', $decea)
                        ->with('deenp', $deenp)->with('deelt', $deelt)->with('alunos', $alunos);
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
        try {
            $users = $request->request->get('user');

            foreach ($users as $user) {
                Voter::create([
                    'user_id' => $user,
                    'topic_id' => request()->route('id'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
            return redirect()->route('temas.show', request()->route('id'));
        } catch (QueryException $e) {
            session()->flash('erro', 'Falha! Não foi possivel convidar esse usuario');
            return redirect()->route('temas.show', request()->route('id'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function show(Voter $voter) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function edit(Voter $voter) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voter $voter) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $voter = Voter::find($id);
        $topic_id = $voter->topic_id;
        $voter->delete();
        return redirect()->route('temas.show', $topic_id);
    }

}
