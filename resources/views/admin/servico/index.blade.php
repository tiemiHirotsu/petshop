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
            <div>
            <a href="{{route('servico.create')}}" class="btn btn-primary m-2">Novo Servico</a>
                <div class="card border m-2">
                    <div class="card-header">
                        <div class="card-title">Serviços
                        </div> 
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Definicao</th>
                                    <th>Preco</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servico as $s)
                                    <tr>
                                        <td>{{$s->id}}</td>
                                        <td>{{$s->nome}}</td>
                                        <td>{{$s->definicao}}</td>
                                        {{-- <td>{{$s->preco}}</td> --}}
                                        <td>
                                            {{number_format($s->preco, 2, ',', '.')}}
                                
                                        </td>
                                        <td>
                                            <img src="/storage/{{$s->foto}}" alt="foto de servico"/></td>     
                                        <td>
                                            <a href="/admin/servico/destroy/{{$s->id}}"><i class="fas fa-trash-alt m-2"></i></a>
                                            <a href="/admin/servico/edit/{{$s->id}}"><i class="fas fa-edit m-2"></i></a>
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

    {{-- {{echo 'index de servicos';}} --}}

    @component('components.footer')   
    @endcomponent
@endsection