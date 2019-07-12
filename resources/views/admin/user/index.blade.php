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
            <div class="col-8 offset-2">
            <a href="{{route('usuario.create')}}" class="btn btn-primary m-2">Adicionar Usuário</a>
                <div class="card border m-2">
                    <div class="card-header">
                        <div class="card-title">Usuários
                        </div> 
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $u)
                                    <tr>
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->nome}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>
                                            <a href="/admin/user/destroy/{{$u->id}}"><i class="fas fa-trash-alt"></i></a>
                                            <a href="/admin/user/edit/{{$u->id}}"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @component('components.footer')   
    @endcomponent
@endsection