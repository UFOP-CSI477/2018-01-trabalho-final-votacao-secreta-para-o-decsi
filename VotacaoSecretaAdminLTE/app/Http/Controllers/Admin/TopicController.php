<?php

namespace App\Http\Controllers\Admin;

use App\Voter;
use App\Topic;
use App\User;
use App\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.indexTopic')->with('topics',$topics);
    }
    public function search(Request $request)
    {
        $topics = Topic::where('title', 'like','%' . $request->input('search') . '%')
        ->orWhere('description', 'like', '%' . $request->input('search') . '%')->get();
      
        return view('admin.indexTopic')->with('topics',$topics);
    }

     public function searchForm(){
        return view('admin.search');
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createTopic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['created_at' => date('Y-m-d H:i:s')],['updated_at' => date('Y-m-d H:i:s')]);
        $data = $request->all();
        
        if($request->file('document')){

            $request->document->storeAs('topicos', $request->input('title').'.pdf');
            $data['document']= $request->input('title').'.pdf';
        }
        
       
        Topic::create($data);
        session()->flash('mensagem', 'Inserido com sucesso!');
        return redirect()->route('temas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = Topic::find($id);
         $voters = Voter::where('topic_id',$id)->get();
       
        return view('admin.showTopic')->with('topic',$topic)->with('voters',$voters);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function open(){
        $id_topic = request()->route('id');
        $topic = Topic::find($id_topic);

        //Verifica opções  e convidados
        if(count($topic->convidados)>1 && count($topic->opcoes)>1){
        $topic->opened= 0;
        $topic->save();
        session()->flash('mensagem', 'Votação aberta com sucesso!');
        return redirect()->route('temas.show',$id_topic);
        }
       
        session()->flash('erro', 'Adicione opções de voto e Participantes!');
        return back();

       
        
    }
    public function close(){
       
        //Fecha
        $id_topic = request()->route('id');
        $topic = Topic::find($id_topic);
        $topic->opened= 1;
        //Pega resultado

        $maior= Vote::where('topic_id',$id_topic)->max('amount');
        $votos = Vote::where('topic_id',$id_topic)->where('amount',$maior)->get();
        
        if(count($votos)>1){
            $topic->result = 'Inconclusivo'; //empate
        }else{
          $topic->result = $votos[0]->option; //vencedor
        }
        $topic->save();
        
        session()->flash('mensagem', 'Votação fechada com sucesso!');
        return redirect()->route('temas.show',$id_topic);


    }
    public function edit($id)
    {
        $topic = Topic::find($id);
        return view('admin.editTopic')->with('topic',$topic);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $topic = Topic::find($id);
        $topic->fill( $request->all());
        $topic->save();
        session()->flash('mensagem', 'Votação fechada com sucesso!');
        return redirect()->route('temas.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect()->route('temas.index');
    }
}
