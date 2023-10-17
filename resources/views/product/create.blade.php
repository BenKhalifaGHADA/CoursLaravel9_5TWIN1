<form action="{{route('product.store')}}" method="POST">
    @csrf
    nom :<input type="texte" name="name">
    description :<input type="texte" name="description">
    stock :<input type="number" name="stock">
    price :<input type="number" name="price">
    Categories:
    <select name="category_id">
        @foreach($categories as $category )
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

    </select>
    <button>Add </button>

</form>
