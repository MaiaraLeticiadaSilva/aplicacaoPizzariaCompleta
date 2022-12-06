<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$pedido->id}}">
        <select name="estado" id="estadoSelect">
            <option value="1">Em produção</option>
            <option value="2">Entregue</option>
            <option value="3">Finalizado</option>
        </select>
        <input type="submit" value="confirmar">
    </form>

</body>
</html>