<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style>
    .div-center{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }

    table{
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }

    th{
        background-color: black;
        border: 2px solid skyblue;
        color: white;
        font-size: 19px;
        font-weight: bold;
    }

    td{
        border: 1px solid skyblue;
        padding: 10px;
    }
</style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    <!-- end slider section -->
  </div>
  <!-- end hero area -->
  <div class="div-center">
    <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Delivery Status</th>
            <th>Image</th>
        </tr>
        @foreach ( $order as $orders )
        <tr>
            <td>{{ $orders->product->title }}</td>
            <td>{{ $orders->product->price }}</td>
            <td>{{ $orders->status }}</td>
            <td>
                <img src="products/{{ $orders->product->image }}" width="150px" height="150px">
            </td>
        </tr>

        @endforeach
    </table>
   </div>

  <!-- contact section -->

  @include('home.contact')

  <!-- end contact section -->

  @include('home.footer')

  <!-- info section -->


    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
