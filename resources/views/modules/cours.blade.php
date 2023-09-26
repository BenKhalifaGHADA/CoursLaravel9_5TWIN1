<html>
<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
</head>
<body>
<table>
    <tr>
        <td>Id</td>
        <td>Nom de module</td>
        <td>Description</td>
        <td>Duree</td>
        <td>Actions</td>
    </tr>
    @foreach($listmodules as $l)
    <tr>
       <td>{{$l->id}}</td>
        <td>{{$l->Nom_Module}}</td>
        <td>{{$l->description}}</td>
        <td>{{$l->duree}}</td>
        <td>

            <button type="submit">Update</button>
            <form action="{{route('module.destroy',['id'=>$l->id])}}" method="Post">
                @csrf
                {# Cross-Site Request Forgery #}
                @Method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

            <a href="{{route('module.show',['id'=>$l->id])}}" >Show</a>
        </td>
    </tr>
    @endforeach
</table>





</body>
</html>
