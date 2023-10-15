<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <title>Anthony Dopeno | CRUD</title>
</head>

<body>

    <div class="container my-5">
        <center>
            <h1>CRUD PROJECT</h1>
            <h5><i>CREATE | READ | UPDATE | DELETE</i></h5>
        </center>
        <div>
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
        </div>
        <div>
            <div>
                <button class="btn btn-dark"><a href="{{route('product.create')}}" class="text-light">Create a Product</a></button>
            </div>
            <table class="table table-striped table-dark my-2">
                <tr>
                    <th scope="col" class="text-center">Product No.</th>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Quantity</th>
                    <th scope="col" class="text-center">Price</th>
                    <th scope="col" class="text-center">Description</th>
                    <th scope="col" class="text-center">Operations</th>
                </tr>
                @foreach($products as $product )
                <tr>
                    <td class="align-middle text-center">{{$product->id}}</td>
                    <td class="align-middle text-center">{{$product->name}}</td>
                    <td class="align-middle text-center">{{$product->quantity}}</td>
                    <td class="align-middle text-center">₱{{$product->price}}</td>
                    <td class="align-middle text-center">{{$product->description}}</td>
                    <!-- Operations -->
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <div class="col-md-5 custom">
                                <button class="btn btn-dark" title="Update Product"><a href="{{route('product.edit', ['product' => $product])}}"><i class="fas fa-edit text-light"></i></a></button>
                            </div>
                            <div class="col-md-5 custom">
                                <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-dark" title="Delete Product"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </div>

                        </div>

                    </td>
                    <!-- Operations -->
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>