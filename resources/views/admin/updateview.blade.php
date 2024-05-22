
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
    @include('admin.sidebar')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Update Product</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>


        <div class="tabular">
            <div class="wrap">
                <form class="form-center" action="{{ url('updateproduct', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="main--form">
                        <label for="">Product Name</label>
                        <input type="text" name="title" value="{{ $data->title }}" required>
                    </div>
    
                    <div class="main--form second">
                        <label for="">Price</label>
                        <input type="number" name="price" value="{{ $data->price }}" required>
                    </div>
    
                    <div class="main--form third">
                        <label for="">Description</label>
                            <input type="text" name="des" value="{{ $data->description }}" required>
                    </div>
    
                    <div class="main--form fourth">
                        <label for="">Quantity</label>
                        <input type="text" name="quantity" value="{{ $data->quantity }}" required>
                    </div>

                    <div class="main--form fifth">
                        <input type="file" name="file">
                    </div>

                    <input class="btn btn-secondary" type="submit">
                </form>
            </div>
        </div>



    @include('admin.script')
</body>
</html>