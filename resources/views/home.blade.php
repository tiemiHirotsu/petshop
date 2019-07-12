@extends('site.app')

@section('titulo','Home')

@section('conteudo')
    @component('components.header')
    @endcomponent

    <div class="banner">
        <img src="{{asset('img/banner.png')}}" alt="banner petshop"/>
    </div>

    <div class="container">
        <div class="row">
            <h2 class="titulo">SERVIÇOS</h2>
        </div>
        <div class="row">
            {{-- <div class="col-4">
                <img class="image_service" src="{{asset('img/banho.jpg')}}" alt="banho para pet"/>
            </div>
            <div class="offset-3 col-5">
                <h3>Banho</h3>
                <h4>Banho e tosa com nossos melhores profissionais</h4>
                <h4>Preço: R$20,00</h4>
                <button class="btn btn-light"><a href={{route('agendar_banho')}}>Agendar</a></button>
            </div> --}}
            @foreach ($servico as $s)
                <div class="col-4">
                    <img class="image_service" src="/storage/{{$s->foto}}" alt="banho para pet"/>
                </div>
                <div class="offset-3 col-5">
                        <h3>{{$s->nome}}</h3>
                        <h4>{{$s->definicao}}</h4>
                        <h4>preço R$: {{number_format($s->preco, 2, ',', '.')}}</h4>
                        <button class="btn btn-primary">
                            <a href="agendar/{{$s->id}}" style="color:white">Agendar</a>
                        </button>
                    </div>
            @endforeach()
        </div>
    </div>

    @component('components.footer')   
    @endcomponent
@endsection