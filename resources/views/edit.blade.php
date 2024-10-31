<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styleCreat.css">
    <title>Document</title>
</head>
<body>
<h1>Update</h1>
<div id="form">
    <form action="/yordles/{{$find->id}}" method="post">
        @csrf
        @method('patch')
        <label for="name">Nom</label>
        <input value="{{$find->name}}" type="text" id="name" name="yordle_name" />
        @error('yordle_name')<style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
        <br>
        <label for="price">Prix</label>
        <input value="{{$find->price}}" type="text" id="price" name="yordle_price" />
        @error('yordle_price')
        <style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
        <br>
        <label for="desc">Description</label>
        <input value="{{$find->description}}" type="text" id="desc" name="yordle_desc" />
        @error('yordle_desc')<style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
        <br>
        <label for="image">URL de l'image</label>
        <input value="{{$find->image}}" type="text" id="image" name="yordle_image" />
        @error('yordle_image')<style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
        <br>
        <label for="DateBirthday">Date d'anniversaire</label>
        <input value="{{$find->dateBirthday}}" type="date" id="DateBirthday" name="yordle_birthday" />
        @error('yordle_birthday')<style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
        <br>
        <button id="BtnUpdate" name="BtnUpdate">Update</button>
        <br>
        <input type="reset" value="Clear">
        <a href="/yordles"><button id="retour">retour</button></a>

    </form>
</div>
</body>
</html>
</body>
</html>

