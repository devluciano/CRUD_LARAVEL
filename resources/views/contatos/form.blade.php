@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Contatos</div>
            <a href="{{url('contatos')}}"></a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    @if (Request::is('*/edit'))
                        
                  
                    <form action="{{url('contatos/update')}}/{{$contato->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="Digite o nome">Nome:</label>
                          <input type="text" name="name" class="form-control" value="{{ $contato->name  }}">
                        </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail:</label>
                                <input type="email" name="email" class="form-control"value="{{ $contato->email  }}">
                            </div>
                                <div class="form-group">
                                    <label for="Digite seu telefone">Telefone:</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $contato->phone  }}">
                                </div>
                            <div class="form-group">
                                <label for="Digite o seu gênero">Gênero:</label>
                                <input type="text" name="genre" class="form-control" value="{{ $contato->genre }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                          </form>
                    
                 @else
                    
                    <form action="{{url('contatos/add')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="Digite o nome">Nome:</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                                <div class="form-group">
                                    <label for="Digite seu telefone">Telefone:</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            <div class="form-group">
                                <label for="Digite o seu gênero">Gênero:</label>
                                <input type="text" name="genre" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                          </form>
                          @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                       

                                
                        
                        
                        
                        
                        
                        
                        
                        
                            
