<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>

</head>
<body>

<div>
<table>
<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>PRICE</th>
    <th>DESCRIPTION</th>
    <th>BIRTH DATE</th>
    <th>IMAGE</th>
    <th>DETAILS</th>
    <th>MODIFIER</th>
    <th>DETRUIRE</th>
</tr>
@foreach ($all as $row)
        <tr>
            <td>{{$row->id }}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->price}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->dateBirthday}}</td>
            <td><img src="{{$row->image}}"></td>
            <td><a href="/yordles/{{$row->id}}">voir</a></td>
            <td><a href="/yordles/{{$row->id}}/edit">modif</a></td>
            <td>
                <form method="post" action="/yordles/{{$row->id}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="supprimer" name="supprimer">
                </form>
            </td>
        </tr>
@endforeach
</table>
</div>
<form methode="post" action="/yordles/create" id="crea">
    <input type="submit" value="creation" name="creation">
</form>
</body>
</html>
