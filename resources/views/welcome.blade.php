<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content backgound-landing">
                <div class="title m-b-md">
                    Bienvenido a Amorfblog
                </div>

                <div class="clickme links">
                    <a href="{{ url('blog') }}">
                        @php
                            $arrayComeIn = ['Ingresa','Ver más','Entra aquí','Descrube','Visualiza','Navegar','Ver posts','Entrar','Leer más'];
                            $numero = rand(0,6);
                        @endphp
                        {{ $arrayComeIn[$numero] }}
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
