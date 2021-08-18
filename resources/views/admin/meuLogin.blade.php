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
        <h1>Meu formulário de Login - ADMIN</h1>
        
        @if(isset($errors))
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        @endif
       
        
        <form action="{{route('login')}}" method="post">
            @csrf
            email: <input type="email" name="email"><br>
            senha: <input type="password" name="password"><br>
            <input type="submit" value="Logar">
        </form>
        
    </body>
</html>
