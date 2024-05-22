<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.css')
</head>
<body>
    @include('admin.sidebar')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Show Products</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>


        <div class="tabular--wrapper">
            <h3 class="main--title">Sapatos data</h3>

            <div class="table--container">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>

                        @foreach($data as $product)
                        <tbody>
                            <tr>
                                <td>
                                    <img height="50" width="50" src="/productimage/{{ $product->image }}" alt="">
                                </td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ url('updateview', $product->id) }}">Update</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{ url('deleteproduct', $product->id) }}">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>

        @include('admin.script')
</body>
</html>