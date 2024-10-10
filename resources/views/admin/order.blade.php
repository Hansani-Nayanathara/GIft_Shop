<!DOCTYPE html>
<html>

  <head>
    @include('admin.css')

    <style>
        table{
            border: 2px solid gray;
            text-align: center;
        }

        th{
            background-color: gray;
            color: white;
            padding: 10px;
            font-size: 18px;
        }

        .table-center{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        td{
            color: white;
            border: 1px solid gray;
            padding: 10px;
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

<div class="table-center">
            <table>
                <tr>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Change status</th>
                    <th>Print pdf</th>
                </tr>
                @foreach ( $data as $data )


                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->rec_address }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->product->title }}</td>
                    <td>{{ $data->product->price }}</td>
                    <td><img src="/products/{{ $data->product->image }}" width="100px" height="100px"></td>
                    <td>
                        @if($data->status == 'in progress')
                        <span style="color: red;">{{ $data->status }}</span>
                        @elseif($data->status == 'On the way')
                        <span style="color: skyblue;">{{ $data->status }}</span>
                        @else
                        <span style="color: yellow;">{{ $data->status }}</span>
                        @endif
                    </td>
                    <td>
                      <a href="{{ url('on_the_way',$data->id) }}" class="btn btn-primary">On the way</a>
                      <a href="{{ url('delivered',$data->id) }}" class="btn btn-success">Delivered</a>
                    </td>
                    <td >
                        <a class="btn btn-secondary" href="{{ url('print_pdf',$data->id) }}">Print PDF</a>
                    </td>
                </tr>

                @endforeach
            </table>
        </div>


        </div>
      </div>
    </div>
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
