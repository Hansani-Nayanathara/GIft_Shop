<!DOCTYPE html>
<html>

  <head>
    @include('admin.css')

    <style type="text/css">

        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }

        .table_deg{
            border: 2px solid grey;

        }

        h2{
            color: white;
        }

        th{
            background-color:  grey;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td{
            border: 1px solid rgb(83, 86, 87);
            text-align: center;
            color: white;
        }

        input[type='search']{
            width: 300px;
            height:40px;
            margin-left:40px;
        }
        </style>
</head>

  <body>

@include('admin.header')

@include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h2>All Products</h2>

            <form action="{{ url('product_search') }}" method="GET">
    <input type="text" name="search" placeholder="Search products...">
    <button type="submit">Search</button>
</form>
            <div class="div_deg">

                <table class="table_deg">
                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td><img src="products/{{ $product->image }}" width="150px" height="150px"></td>
                <td>
                    <a href="{{ url('update_product',$product->id) }}"" class="btn btn-success">Update</a>
                </td>
                <td>
                    <a href="{{ url('delete_product',$product->id) }}" onclick="confirmation(event)" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="div_deg">
    {{ $products->links() }}
</div>
      </div>
    </div>


    <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            swal({
                title: "Are you sure you want to delete this?",
                text: "This action cannot be undone.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>



