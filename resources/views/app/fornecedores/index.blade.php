@extends('app.layouts.layout')          
@section('title')
Fornecedores
@stop
          
@section('content')

    <hr>
    @forelse ($fornecedores as $key => $item)
        Iter: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $item['nome'] }}<br/>
        Status: {{ $item['status'] }}<br/>
        
        ID: {{ $item['id'] ?? 'DEFAULT' }} 
        {{-- ?? seria o valor default --}}
        <br>
        
        <hr>
    @empty
        Não há fornecedores
    @endforelse

    {{-- @if($loop->first) ou last
            first iter
        @endif --}}

    {{-- $loop->count == count($array) --}}


    {{-- isso é um // ou /**/ no php --}}
    {{-- @dd($fornecedores)  pr() do cake no laravel pra array --}}

    {{-- se colocar um @ antes dos {{}} ele vira texto normal --}}

    @php
    // literalmente uma tag php diferente
    @endphp

            
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
@stop