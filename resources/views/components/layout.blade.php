<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    {{$slot}}  
    <form action="{{route('logout')}}" method= "GET">
    <button> sair </button>
    </form>
</body>
</html>