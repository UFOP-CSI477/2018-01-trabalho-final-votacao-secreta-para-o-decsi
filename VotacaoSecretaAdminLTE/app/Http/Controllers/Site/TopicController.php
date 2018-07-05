<?php

namespace App\Http\Controllers\Site;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $temas = Topic::where('visible', 1)->get();
        return view('site.temas')->with('temas', $temas);
    }

    public function finalizados() {

        $temas = Topic::where('visible', 1)->where('result', '!=', 'Sem resultado')->get();
        return view('site.temas')->with('temas', $temas);
    }

    public function pendentes() {
        $temas = Topic::where('visible', 1)->where('result', 'Sem resultado')->get();
        return view('site.temas')->with('temas', $temas);
    }

    public function search(Request $request) {
        $topics = Topic::where('title', 'like', '%' . $request->input('search') . '%')
                        ->orWhere('description', 'like', '%' . $request->input('search') . '%')->get();

        return view('admin.indexTopic')->with('topics', $topics);
    }

    public function searchForm() {
        return view('admin.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $tema = Topic::find($id);
        return view('site/temasShow')->with('topic', $tema);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
    }

}
