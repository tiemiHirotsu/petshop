<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>PETSHOP :: @yield('titulo') </title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet"> 
        <link href="{{asset('css/bootstrap-datepicker.min.css')}}" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 
        
    </head>
    <body>

        @yield('conteudo')

        {{-- <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>