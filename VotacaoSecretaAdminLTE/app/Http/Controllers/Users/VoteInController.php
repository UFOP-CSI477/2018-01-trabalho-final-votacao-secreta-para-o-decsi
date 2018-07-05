<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\VoteIn;
use App\Topic;
use App\Vote;
use Illuminate\Database\QueryException;
class VoteInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function votarCreate(){
        $id_topic = request()->route('id');
       $topic = Topic::find($id_topic);
        return view('users.votarTopic')->with('topic', $topic);
    }

     public function votarStore(Request $request)
    {
        try{
           
       
         VoteIn::create([
            'topic_id' =>  request()->route('id'),
            'user_id' =>  Auth::user()->id,
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
       ]);
     
    $vote_increase = Vote::find($request->request->get('option'));
    $vote_increase->amount = $vote_increase->amount + 1;
    $vote_increase->save();
    
    return redirect()->route('user.temas.show', request()->route('id'));


    }catch(QueryException $e){
        session()->flash('erro', 'Falha! Não foi possivel votar');
        return redirect()->route('user.temas.show', request()->route('id'));
    }
    }
    public function index()
    {
        //
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
        //
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
        //
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
