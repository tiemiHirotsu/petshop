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
                    <div class="card-title">Editando Serviço
                    </div> 
                </div>
                <div class="card-body">
                <form action="/admin/servico/{{$servico->id}}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="nome">Nome: </label>
                        <input type="text" id="nome"class="form-control" name="nome" value="{{$servico->nome}}">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição: </label>
                            <input type="text" id="descricao" class="form-control" name="descricao" value="{{$servico->descricao}}"">
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço: </label>
                            <input type="number" id="preco" class="form-control" name="preco" value="{{$servico->preco}}"">
                        </div>
                        <div class="custom-file mb-4">
                                <label class="custom-file-label" for="foto">Escolha uma foto</label>
                                <input type="file" class="custom-file-input" id="foto" name="foto">
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