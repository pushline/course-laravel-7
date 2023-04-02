<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <?php // asset serve como public na url ?>
        <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Fornecedores
                </div>

                {{-- isso é um // ou /**/ no php --}}

                @php
                    // literalmente uma tag php diferente
                @endphp

                <div class="links">
                    <a href="{{ route('site.home') }}">Home</a>
                    <a href="{{ route('site.sobre') }}">Sobre Nós</a>
                    <a href="{{ route('site.contato') }}">Contato</a>
                    <a href="{{ route('site.login') }}">Login</a>
                    <a href="{{ route('app.produtos') }}">Produtos</a>
                    <a href="{{ route('app.clientes') }}">Clientes</a>
                    <a href="{{ route('app.fornecedores') }}">Fornecedores</a>
                </div>

               {{-- @dd($fornecedores)  pr() do cake no laravel pra array --}}

                @if(count($fornecedores) > 0)
                    <h3>fornecedores existem</h3>
                @else
                    <h3>nao tem fornecedores</h3>
                @endif

            </div>
        </div>
    </body>
</html>
