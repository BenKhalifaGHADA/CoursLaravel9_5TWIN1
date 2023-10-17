<form action="{{route('product.update',$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    nom :<input type="texte" name="name" value="{{$product->name}}">
    description :<input type="texte" name="description" value="{{$product->description}}">
    stock :<input type="number" name="stock" value="{{$product->stock}}">
    price :<input type="number" name="price" value="{{$product->price}}">
    <button>update </button>

</form>
