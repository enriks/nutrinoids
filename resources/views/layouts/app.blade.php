<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="https://static6.depositphotos.com/1064024/545/i/950/depositphotos_5453504-stock-photo-fruit-and-vegetable-alphabet.jpg">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../resources/assets/css/bootstrap-select.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        
                            @guest
                        <li>
                            <a class="nav-link" href="{{route('login')}}">{{ __('Autenticarse') }}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('register')}}">{{ __('Darse de alta') }}</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </div>
                </div>
            </nav>
        </header>
        <main class="py-4">
            @if(session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            {{ session('info')}}
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(count($errors))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $("#select").change(function() {
            $("select option:selected").each(function() {
                str = $('#select option:selected').val();
                var url = '{{ route("lacteos.edit", "-1") }}';
                console.log(url);
                url = url.replace('lacteos', $("#select").attr("name"));
                url = url.replace('-1', str);
                console.log(url);
                $("#editar").attr("href", "" + url);
            });
        }).trigger("change");

    </script>
    <script>
        $("#select").change(function() {
            $("select option:selected").each(function() {
                str = $('#select option:selected').val();
                var url = '{{ route("lacteos.index", "1") }}';
                var a = str;
                console.log(url);
                console.log(a);
                url = url.replace('lacteos', str);
                console.log(url);
                $("#visitar").attr("href", "" + url);
            });
        }).trigger("change");

    </script>
       <script>
           var valorant=$("#problSalText").val();
           if(valorant == 'No tiene'){
               $("#problSalComb").val('No').change();
               valorant=''
           }
        $('#problSalComb').change(function() {
            $("select option:selected").each(function() {
                str = $('#problSalComb option:selected').val();
                
                if(str == 'Si'){
                    $("#problSalText").attr("class","form-control")
                    $("#problSalText").attr("value",valorant)
                    console.log(valorant)
                }else{
                    $("#problSalText").attr("class","form-control d-none")
                    $("#problSalText").attr("value","No tiene")
                    
                }
            });
        }).trigger("change");

    </script>
    <script>
        $(function() {
    $('input:radio[name="tomoVit"]').change(function() {
        if ($(this).val() == 'Si') {
            $("#tomovitaminas").attr("class","container")
            $("#botonno").attr("class","container d-none")
            
        } else {
            $("#tomovitaminas").attr("class","container d-none")
             $("#botonno").attr("class","container")
        }
    });});
    </script>
    <script src="../resources/assets/js/bootstrap-select.js"></script>
    @yield('js')

</body> 

</html>
