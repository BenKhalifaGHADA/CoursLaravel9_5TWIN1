<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>stock</td>
        <td>Actions</td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->stock}}</td>

            <td>
                <a href="{{route('product.show',$product->id)}}">show</a>
                <form action="{{route('product.destroy',$product->id)}}" method="POSt">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>

                <a href="{{route('product.edit',$product->id)}}">update</a>
            </td>
        </tr>
    @endforeach
</table>
