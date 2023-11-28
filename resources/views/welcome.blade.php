<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .mystyle {
           display: none;
        }
    </style>
</head>
<body style="background: black; color: aliceblue">

<div class="container">
    <button class="btn btn-success" onclick="myFunction()">create product</button>
    <div class="col-md-3 mx-auto"  id="myDIV">
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
                    <td class="text-center">
                        <p class="text-center text-danger">{{ __('Result not found') }}</p>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

<script>
    function myFunction() {
        var element = document.getElementById("myDIV");
        element.classList.toggle("mystyle");
    }
</script>
</body>
</html>
