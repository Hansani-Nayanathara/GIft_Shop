welcome
<!DOCTYPE html>
<html>

  <head>
    @include('admin.css')
    <style type="text/css">
        input[type='text']{
            width: 300px;
            height: 43px;
        }

        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }

        h1{
            color: white;
        }

        label{
            display: inline-block;
            width: 200px;
            font-size: 18px !important;
            color: white !important;
        }

        input[type='text']{
            width: 350px;
            height: 50px;
        }

        textarea{
            width: 450px;
            height: 80px;
        }

        .input_deg{
            padding: 15px;
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
            <h1>Update Product</h1>

<div class="div_deg">

    <form action="{{ url('edit_product',$data->id) }}" method="post" enctype="multipart/form-data">
@csrf
        <div class="input_deg">
            <label for="">Product Title</label>
            <input type="text" name="title" value="{{ $data->title }}">
        </div>
        <div class="input_deg">
            <label for="">Description</label>
            <textarea name="description" required>{{ $data->description }}</textarea>
        </div>
        <div class="input_deg">
            <label for="">Price</label>
            <input type="text" name="price" value="{{ $data->price }}">
        </div>
        <div class="input_deg">
            <label for="">Quantity</label>
            <input type="number" name="quantity" value="{{ $data->quantity }}">
        </div>
        <div class="input_deg">
            <label for="">Product category</label>
            <select name="category" id="" required>
                @foreach ( $category as $category )
                <option value="{{ $category->category_name }}" {{ $data->category == $category->category_name ? 'selected' : '' }}>{{ $category->category_name }}</option>
                @endforeach


            </select>
        </div>
        <div class="input_deg">
            <label for="">Current Product Image</label>
            <img width="150px" height="150px" name="image" src="/products/{{ $data->image }}">
        </div>
        <div class="input_deg">
            <label for="">Product Image</label>
            <input type="file" name="image">
        </div>
        <div class="input_deg">
            <input type="submit" class="btn btn-success" value="Save">
        </div>
    </form>

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
