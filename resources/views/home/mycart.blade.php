<!DOCTYPE html>
<html>

<head>
  @include('home.css')

    <style>
        .div-deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table{
            border: 2px solid black;
            text-align: center;
            width: 600px;
        }

        th{
            border: 2px solid black;
            text-align: center;
            color: white;
            font: 20px;
            font-weight: bold;
            background-color: black;
        }

        td{
            border: 1px solid black;
        }

        .cart-value{
            text-align: center;
            margin-bottom: 70px;
        }

        .order-deg{
            padding-right: 150px;
            margin-top: -50px;
        }

        label{
            display: inline-block;
            widows: 170px;
        }

        .div-gap{
            padding: 20px;
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



  <div class="div-deg">
    <div class="order-deg">
        <form action="{{ url("confirm_order") }}" method="post">
            @csrf
            <div class="div-gap">
                <label for="">Reciever name : </label>
                <input type="text" name="name" value="{{ Auth::user()->name }}">
            </div>
            <div class="div-gap">
                <label for="">Reciever Address : </label>
                <textarea name="address" id="">{{ Auth::user()->address }}</textarea>
            </div>
            <div class="div-gap">
                <label for="">Reciever Phone: </label>
                <input type="text" name="phone" value="{{ Auth::user()->phone }}">
            </div>
            <div class="div-gap">
                <input type="submit"value="Place Order" class="btn btn-primary">
            </div>
        </form>
    </div>
    <table>

      <tr>
          <th>Product title</th>
          <th>Price</th>
          <th>Image</th>
          <th>Remove</th>
      </tr>

      <?php
      $totalValue = 0;
      ?>
      @foreach ($cart as $carts)
      <tr>
          <td>{{ $carts->product->title }}</td>
          <td>{{ $carts->product->price }}</td>
          <td>
              <img src="/products/{{ $carts->product->image }}" width="100px" height="100px">
          </td>
          <td>
              <a href="{{ url('delete_cart', $carts->id) }}" class="btn btn-danger">Remove</a>
          </td>
      </tr>
      <?php
      $totalValue += $carts->product->price;
      ?>
      @endforeach

    </table>
  </div>
  <div class="cart-value">
      <h5>Total Value of Cart is : ${{ $totalValue }}</h5>
  </div>


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
