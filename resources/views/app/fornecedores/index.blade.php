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
                {{-- @dd($fornecedores)  pr() do cake no laravel pra array --}}

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
                     
                
                
                {{-- 
                    @for($i = 0; $isset($fornecedores[$i]); $i++)
                        {{ $fornecedores[$i][var] }}
                    @endfor
                --}}

                {{-- 
                    @php $i = 0; @endphp
                    @while(isset($fornecedores[$i]))
                        {{  }}
                        @php $i++; @endphp - tem q aumentar ao decorrer do while 
                    @endwhile
                --}}
                @foreach ($fornecedores as $item)
                    <br>
                    Fornecedor: {{ $item['nome'] }}<br/>
                    Status: {{ $item['status'] }}<br/>
                    
                    ID: {{ $item['id'] ?? 'DEFAULT' }} 
                    {{-- ?? seria o valor default --}}
                    
                @endforeach
                

                {{--  
                    @for($i = 0; $i < 10; $i++)
                       {{ $i }} <br/>
                    @endfor    
                --}}    
                

                {{-- 
                    @switch($var)
                        @case('fodase')
                            tal coisa
                            @break
                        @default
                            fodase
                    @endswitch

                --}}
                
                {{-- @unless executa se o retorno for false --}}
                {{-- o contrario do if(!condicao) --}}
                {{-- @unless($fornecedores[2]['status'] == 'Y') 
                    Fornecedor inativo
                @endunless --}}

               
                {{-- if isset $var = retorna true se existe/definida --}}
                

            </div>
        </div>
    </body>
</html>
