<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Anthony Dopeno | CRUD</title>
</head>
<body>
<div class="container my-5">
    <center><h1>Create a Product</h1></center>
    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">{{$error}}</div>
            @endforeach
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" ype="text" class="form-control mb-3" name="name" placeholder="Name" />
        </div>
        <div class="form-group">
            <label class="form-label">Quantity</label>
            <input type="text" ype="text" class="form-control mb-3" name="quantity" placeholder="Quantity" />
        </div>
        <div class="form-group">
            <label class="form-label">Price</label>
            <input type="text" ype="text" class="form-control mb-3" name="price" placeholder="Price" />
        </div>
        <div class="form-group">
            <label class="form-label">Description</label>
            <input type="text" ype="text" class="form-control mb-3" name="description" placeholder="Description" />
        </div>
        <div class="form-group" align="center">
            <input type="submit" value="Add Product" class="btn btn-dark"/>
        </div>
    </form>
</div>
</body>
</html>