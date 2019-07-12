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
                    <div class="card-title">Novo Serviço
                    </div> 
                </div>
                <div class="card-body">
                    <form action="/admin/servico" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="nome">Nome: </label>
                            <input type="text" id="nome"class="form-control" name="nome" placeholder="Nome do serviço">
                        </div>
                        <div class="form-group">
                            <label for="definicao">Definicao: </label>
                            <textarea id="definicao" class="form-control" name="definicao" placeholder="Definicao do serviço" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço: </label>
                            <input type="number" id="preco" class="form-control" name="preco" placeholder="preço">
                        </div>
                        {{-- <div class="form-group">
                            <label for="foto">Foto: </label>
                            <input type="file" id="foto" class="form-control" name="foto" placeholder="foto">
                        </div> --}}
                        <div class="custom-file mb-4">
                            <label class="custom-file-label" for="foto">Escolha uma foto</label>
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="reset" class="btn btn-secondary">Cancelar</button>
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