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
                    Clientes
                </div>

                <div class="links">
                    <a href="/">Home</a>
                    <a href="/sobre-nos">Sobre Nós</a>
                    <a href="/contato">Contato</a>
                    <a href="/app/produtos">Produtos</a>
                    <a href="/app/clientes">Clientes</a>
                    <a href="/app/fornecedores">Fornecedores</a>
                    <a href="/login">Login</a>
                </div>
            </div>
        </div>
    </body>
</html>
