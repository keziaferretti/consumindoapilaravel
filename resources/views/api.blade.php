<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consumindo uma API em Laravel</title>
</head>

<body>
    <h1>Consumindo uma API em Laravel</h1>
    <ul>
        @foreach($apiArray['pokemon'] as $pokemon)
            <p>id: {{ $pokemon['id'] }}</p>
            <p>Nome: {{ $pokemon['name'] }}</p>
            <img src="{{ $pokemon['img'] }}" alt="Imagem do Pokemon">
            <hr>
        @endforeach
    </ul>
</body>


</html>