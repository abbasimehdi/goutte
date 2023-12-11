<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background: black; color: aliceblue">
<div class="container">
    <h2 class="fa fa-list">Products List</h2>
    <p>It's get products by admin panel sub service</p>
    <table class="table">
        <thead>
        <tr>
            <th>order</th>
            <th>title</th>
            <th>price</th>
            <th>image</th>
            <th>original site url</th>
            <th>operation</th>
        </tr>
        </thead>
        <tbody>
        @php $i = 1; @endphp
        @if(isset($products) && $products)
            @foreach($products as $product)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $product['header']?? 'title' }}</td>
                    <td>{{ $product['price']?? 0 }}</td>
                    <td>
                        @if($productImages)
                            @foreach($productImages as $productImage)
                                <img
                                    src='{{ asset($productImage ?? "https://static.nike.com/a/images/w_1536,c_limit/22f6b7ae-1c09-4aa1-a8f0-3e54a8bec589/image.jp") }}'
                                    width="50" height="50" alt="image"
                                >
                            @endforeach
                        @endif
                    </td>
                    <td><a href="{{ $product['original-site-url'] }}" _blank>go to sute</a></td>
                    <td>
                        <button class="btn btn-warning">edit</button>
                        <button class="btn btn-danger">remove</button>
                    </td>
                </tr>
                @php $i++; @endphp
            @endforeach
            <tr>
                <td colspan="6">
{{--                    {{ $products->links() }}--}}
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
</body>
</html>
