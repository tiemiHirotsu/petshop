@extends('site.app')

@section('titulo','Área Administrativa')

@section('conteudo')
    @component('components.header')
    @endcomponent

    {{-- <div class="banner">
        <img src="{{asset('img/banner.png')}}" alt="banner petshop"/>
    </div> --}}

    <div class="sidebar">
        <a href="{{route('agenda.index')}}"><i class="far fa-fw fa-calendar-alt"></i> Agenda</a>
        <a href="{{route('servico.index')}}"><i class="fas fa-fw fa-paw"></i> Servicos</a>
        <a href="{{route('usuario.index')}}"><i class="fa fa-fw fa-user"></i> Usuários</a>
    </div>

    {{-- mostrando os usuários cadastrados --}}
    <main role="main">
        <div class="container">
            <div class="card border m-2">
                <div class="card-header">
                    <div class="card-title">Editando Usuário
                    </div> 
                </div>
                <div class="card-body">
                    <form action="/admin/user/{{$usuario->id}}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="nome">Nome: </label>
                        <input type="text" id="nome"class="form-control" name="nome" value="{{$usuario->nome}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                        <input type="email" id="email" class="form-control" name="email" value="{{$usuario->email}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha: </label>
                            <input type="text" id="password" class="form-control" name="password" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="reset" class="btn btn-primary">Cancelar</button>
                    </form>
                </div>
                @if($errors->any())
                    <div class="card-footer">
                        @foreach($errors->all() as $error) 
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </main> 

    @component('components.footer')   
    @endcomponent
@endsection