@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><a href="{{url('contatos/new')}}">Novo Contato</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <h1>Lista de Contatos</h1>
                    
                    <table class="table">
                       
                        <thead>
                          <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($contatos as $c)
                            <tr>
                              <th scope="row">{{$c->id}}</th>
                                <td>{{$c->name}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->phone}}</td>
                                <td>{{$c->genre}}</td>
                                <td>
                                    <a href="contatos/{{ $c->id }}/edit" class="btn btn-info">Editar</button>
                                        
                                <td>
                                    <form action="contatos/delete/{{ $c->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Deletar</button>
                                        </form>
                                </td>
                            </tr>
                            
                            @endforeach
                         </tbody>
                     </table>
                    </div>
                   </div>
               </div>
            </div>
        </div>
        @endsection
                            
                      
                            
                         
                            
                        

                   
                    


                        
                       
        

