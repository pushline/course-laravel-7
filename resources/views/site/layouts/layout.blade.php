<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Super Gestão - @yield('title')</title>

        <?php // asset serve como public na url ?>
        <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts._partials.header')

        <div class="conteudo-pagina">
            <div class="content">
                @yield('content')
            </div>
        </div>

        @include('layouts._partials.footer')
        
    </body>
</html>
