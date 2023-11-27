<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background: black; color: aliceblue">

<div class="container">
    <div class="col-md-3 mx-auto">
        <h2>Product Form</h2>
    <form
        action=""
        method="post"
        enctype="multipart/form-data"
    >
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">save</button>
        </div>
    </form>
    </div>
</div>
<div class="container">
    <h2 class="fa fa-list">Products List</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
        <tr>
            <th>order</th>
            <th>title</th>
            <th>image</th>
            <th>operation</th>
        </tr>
        </thead>
        <tbody>
            @php $i = 1; @endphp
            @if(isset($products) && $products)
                @foreach($products as $product)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $product->title }}</td>
                        <td>
                            <img src="{{ $product->image }}" alt="image" width="100px" height="100px">
                        </td>
                        <td>
                            <button class="btn btn-warning">edit</button>
                            <button class="btn btn-danger">remove</button>
                        </td>
                    </tr>
                    @php $i++; @endphp
                 @endforeach
                <tr>
                    <td colspan="4">
                        {{ $products->links() }}
                    </td>
                </tr>
            @else
                <tr>
                    <td colspan="10">
                        <p class="text-center text-danger">{{ __('Result not found') }}</p>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
</body>
</html>
