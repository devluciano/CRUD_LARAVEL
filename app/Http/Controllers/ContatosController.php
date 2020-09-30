<?php

namespace App\Http\Controllers;
use App\contato;
use Redirect;
use Illuminate\Http\Request;




class ContatosController extends Controller
{
    public function index(){
        $contatos = Contato::get();
        return view('contatos.list',['contatos'=> $contatos]);
    }
      

    public function new(){
        return view('contatos.form');
    }

    public function add(Request $request){
        $contato = new contato;
        $contato = $contato->create($request->all());
        return Redirect::to('/contatos');
    }
        
    public function edit( $id ){
        $contato = contato::findOrFail( $id );
        return view('contatos.form', ['contato' => $contato]);
    }
    

    public function update( $id, Request $request ){
        $contato = contato::findOrFail( $id );
        $contato->update( $request->all() );
        return Redirect::to('/contatos');
    }

    public function delete( $id ){
        $contato = contato::findOrFail( $id );
        $contato->delete();
        return Redirect::to('/contatos');
    }

    

    

}






