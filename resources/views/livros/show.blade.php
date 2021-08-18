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
        <h1>Detalhes</h1>
        <p>Título: {{$livro->titulo}}</p>
        <p>Autor: {{$livro->autor}}</p>
        <p>ISBN: {{$livro->ISBN}}</p>
        <p>Resumo: {{$livro->resumo}}</p>
        <p>Preço: {{$livro->preco}}</p>        
    </body>
</html>
