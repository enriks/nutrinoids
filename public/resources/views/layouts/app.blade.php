<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                                    <li>{{  $error }}</li>
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

    <script src="{{ asset('js/app.js') }}" ></script>
   <script>   

    $( "#select" ).change(function () {
        $( "select option:selected" ).each(function() {
            str = $('#select option:selected' ).val();
            var url = '{{ route("lacteos.edit", "-1") }}';
            console.log(url);
            url = url.replace('lacteos', $("#select").attr("name"));
            url = url.replace('-1', str);
        console.log(url);
        $("#editar").attr("href",""+url);
        });
    }).trigger( "change" );


    </script>
   <script src="../resources/assets/js/bootstrap-select.js"></script>
    @yield('js')
    
</body>
</html>
