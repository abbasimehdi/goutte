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
            <th>image</th>
            <th>like</th>
            <th>created at</th>
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
                        <img
                            src='{{ asset($product->image) }}'
                            width="50" height="50" alt="image">
                    </td>
                    <td>
                        <form action="{{ url('api/v1/main/product/like') }}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="1">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-default">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                </svg>
                            </button>
                        </form>
                    </td>
                    <td>{{ $product->created_at }}</td>
                    <td>
                        <button class="btn btn-warning">edit</button>
                        <button class="btn btn-danger">remove</button>
                    </td>
                </tr>
                @php $i++; @endphp
            @endforeach
            <tr>
                <td colspan="6">
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
</body>
</html>
