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
        <h1>Lista de Livros - 

            <form method="POST" action="{{ route('logout') }}" style="display: inline">
                @csrf
                <input type="submit" value="Sair">
            </form>

        </h1>

        @forelse($livros as $livro)

        <p>{{$livro->titulo}} - <a href="{{ route('livros.show', $livro->id) }}">Detalhes</a></p>

        @empty

        <h2>Não há livros cadastrados.</h2>

        @endforelse

    </body>
</html>
