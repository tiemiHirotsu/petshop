@extends('site.app')

@section('titulo','Home')

@section('conteudo')
    @component('components.header')
    @endcomponent

    <div class="banner">
        <img src="{{asset('img/banner.png')}}" alt="banner petshop"/>
    </div>

    {{-- <div class="container">
        <div class="row">
            <h2 class="titulo">Agendar</h2>
        </div>
        <div class="row">
            <form action="submit" method="POST">
                <div class="form-group row">
                    <label class="col-3 col-form-label font-weight-bold mt-n1" for="nome">Nome dono:</label>
                    
                        <input class="form-control col-9" type="text" id="nome" name="nome" value="">
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label font-weight-bold" for="nome">Telefone:</label>
                    <div class="col-9">
                        <input class="form-control" type="text" id="nome" name="nome" value="">
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
    <div class="container mt-4">
        <h2>Agendar Serviço</h2></h2>
        <form action="/send" method="POST">
            @csrf
            {{-- <input type="hidden" class="form-control" id="servico_id" value="{{$servico->id}}" name="servico_id" > --}}
            <div class="form-group">
                <label for="servico">Agendamento do serviço: </label>
                <input type="text" class="form-control" id="servico" value="{{$servico->nome}}" name="servico">
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o seu nome" name="nome">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Digite o seu e-mail" name="email">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" placeholder="(xx) xxxx-xxxx" name="telefone">
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <input class="datepicker" id="data" name="data">
            </div>
            <div class="form-group">
                <label for="categoria m-4">Horário: </label>
                    <select class="form-control col-3" id="horario" name="horario">
                        <option value="8">08:00 às 09:00</option>
                        <option value="9">09:00 às 10:00</option>
                        <option value="10">10:00 às 11:00</option>
                        <option value="11">11:00 as 12:00</option>
                        <option value="12">13:00 as 14:00</option>
                        <option value="14">14:00 as 15:00</option>
                        <option value="15">15:00 as 16:00</option>
                        <option value="16">16:00 as 17:00</option>
                        <option value="17">17:00 as 18:00</option>
                    </select>
            </div>

            
          <button type="submit" class="btn btn-primary mb-4">Agendar</button>
          <button type="cancel" class="btn btn-secondary mb-4">Cancelar</button>
        </form>
      </div>

    @component('components.footer')   
    @endcomponent
@endsection