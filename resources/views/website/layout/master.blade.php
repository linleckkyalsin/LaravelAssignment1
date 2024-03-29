<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


   <title> @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('website/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('website/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('website/assets/css/templatemo-sixteen.css')}}">
    <link rel="stylesheet" href="{{url('website/assets/css/owl.css')}}">

  </head>

  <body>

  @include('website.layout.header')
    <!-- Page Content -->
@yield('content')

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{url('website/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('webiste/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{url('website/assets/js/custom.js')}}"></script>
    <script src="{{url('webiste/assets/js/owl.js')}}"></script>
    <script src="{{url('website/assets/js/slick.js')}}"></script>
    <script src="{{url('website/assets/js/isotope.js')}}"></script>
    <script src="{{url('website/assets/js/accordions.js')}}"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
