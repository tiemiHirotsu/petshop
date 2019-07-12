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

    @component('components.footer')   
    @endcomponent
@endsection