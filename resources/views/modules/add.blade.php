<html>
<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
</head>
<body>
<form action="{{route('module.store')}}" method="POST">
    @csrf

    Nom de module<input type="text" name="Nom_Module">
    Duree:<input name="duree">
    Description: <input name="description">
    <button type="submit" >Add</button>
</form>
</body>
</html>
