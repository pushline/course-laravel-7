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
                    Home
                </div>

                <div class="links">
                    <a href="/sobre-nos">Sobre Nós</a>
                    <a href="/contato">Contato</a>
                </div>

            </div>
        </div>
    </body>
</html>