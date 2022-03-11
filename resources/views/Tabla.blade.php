<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla</title>
</head>
<body>
    <center>
        <h1>Grupos</h1>
        <table>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Modificado</th>
                <th>Image</th>
                <th>extension</th>
            </tr>
            @foreach ($personajes as $personaje)
                <tr>
                    <td>{{$personaje['id']}}</a></td>
                    <td>{{$personaje['nombre']}}</td>
                    <td>{{$personaje['descripcion']}}</td>
                    <td>{{$personaje['modificado']}}</td>
                    <td>{{$personaje['thumbnail_path']}}</td>
                    <td>{{$personaje['thumbnail_extension']}}</td>
                </tr>
            @endforeach
    </center>
</body>
</html>