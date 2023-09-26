<html>
<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
</head>
<body>
<form action=" {{ route('modules.update', ['id' => $module->id]) }} " method="POST">
    @csrf
    @method('PUT')
    Name: <input type="text" name="Nom_Module" value="{{ $module->Nom_Module }}">
    Description: <input type="text" name="description" value="{{ $module->description }}">
    durée: <input type="text" name="duree" value="{{ $module->duree }}">
    <button type="submit">Modifier Module</button>
</form>

</body>
</html>
