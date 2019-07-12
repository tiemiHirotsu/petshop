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
            <div class="col-8 offset-2">
                <h1>O serviço foi marcado!!</h1>
                <h2>O petshop agrade a preferência e informa que um e-mail foi lhe enviado com os dados passados no formulário</h2>
                <h2>Entraremos em contato para confirmá-lo</h2>
                
            </div>
        </div>
    </div>
    
    @component('components.footer')   
    @endcomponent
@endsection