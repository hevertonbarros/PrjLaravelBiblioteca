<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>@lang('messages.new_book')</h1>

        @if(session('msg'))
        <p>{{session('msg')}}</p>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('livros.store') }}"  method="POST">
            @csrf
            @lang('messages.title'): <input type="text" name="titulo"><br>
            @lang('messages.author'): <input type="text" name="autor"><br>
            @lang('messages.ISBN'): <input type="text" name="ISBN"><br>
            @lang('messages.abstract'): <textarea name="resumo"></textarea><br>
            @lang('messages.price'): <input type="number" step="0.01" name="preco"><br>
            <input type="submit" name="Cadastrar">
        </form>
    </body>
</html>
