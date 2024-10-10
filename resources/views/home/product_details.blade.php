<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style>
    .div_center{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }

    .detail-box{
        padding: 15px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
   @include('home.slider')
    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <!-- end shop section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">

      </div>
      <div class="row">




        <div class="col-md-10">
          <div class="box">

              <div class="div_center">
                <img width="400" src="/products/{{$data->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                 {{$data->title}}
                </h6>
                <h6>
                  Price
                  <span>
                    {{$data->price}}
                  </span>
                </h6>
              </div>

              <div class="detail-box">
                <h6>
                 {{$data->category}}
                </h6>
                <h6>
                  Available quantity
                  <span>
                    {{$data->quantity}}
                  </span>
                </h6>
              </div>

              <div class="detail-box">

                  <p>
                    {{$data->description}}
                  </p>

              </div>

          </div>
        </div>



        </div>

    </div>
  </section>



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

