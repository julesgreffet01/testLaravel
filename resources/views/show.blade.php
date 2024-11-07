<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styleShow.css">
    <title>Document</title>

</head>
<body>
<div id="find">
    <p><img src="{{$find->image}}"></p>
    <p><strong>id :</strong> {{$find->id}}</p>
    <p><strong>{{ __('name') }} :</strong> {{$find->name}}</p>
    <p><strong>{{ __('price') }} :</strong> {{$find->price}}</p>
    <p><strong>description :</strong> {{$find->description}}</p>
    <p><strong>{{ __('dateBirthday') }} :</strong> {{$find->dateBirthday}}</p>
    <a href="/yordles">retour</a>
</div>

</body>
</html>
