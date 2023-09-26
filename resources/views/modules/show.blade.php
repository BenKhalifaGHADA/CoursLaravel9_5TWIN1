<html>
<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
</head>
<body>
<h1>Détails d'un module</h1>
{{$module->id}}
{{$module->Nom_Module}}
{{$module->duree}}
{{$module->description}}

</body>
</html>
