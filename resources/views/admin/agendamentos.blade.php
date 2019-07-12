@extends('site.app')

@section('titulo','Área Administrativa')

@section('conteudo')
    @component('components.header')
    @endcomponent

    <div class="banner">
        <img src="{{asset('img/banner.png')}}" alt="banner petshop"/>
    </div>

    <div class="sidebar">
        <a href="{{route('agenda.index')}}"><i class="far fa-fw fa-calendar-alt"></i> Agenda</a>
        <a href="{{route('servico.index')}}"><i class="fas fa-fw fa-paw"></i> Servicos</a>
        <a href="{{route('usuario.index')}}"><i class="fa fa-fw fa-user"></i> Usuários</a>
    </div>

    {{-- mostrando os agendamentos de serviço --}}
    <main role="main">
        <div class="container">
            <div class="card border m-2">
                <div class="card-header">
                    <div class="card-title">Serviços agendados
                    </div> 
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Serviço agendado</th>
                                <th>Nome do cliente</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Data</th>
                                <th>Horário</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agenda as $a)
                                <tr>
                                    <td>{{$a->id}}</td>
                                    <td>{{$a->servico_nome}}</td>
                                    <td>{{$a->nome}}</td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->telefone}}</td>
                                    {{-- <td>{{$a->data}}</td> --}}
                                    <td>{{ date( "m-d-Y", strtotime($a->data))}}</td>
                                <td>{{$a->horario}}:00 até {{($a->horario)+1}}:00</td>
                                    {{-- <td>{{$a->horario}}</td>
                                        <a href="/admin/servico/destroy/{{$s->id}}"><i class="fas fa-trash-alt m-2"></i></a>
                                        <a href="/admin/servico/edit/{{$s->id}}"><i class="fas fa-edit m-2"></i></a>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </main>

    @component('components.footer')   
    @endcomponent
@endsection