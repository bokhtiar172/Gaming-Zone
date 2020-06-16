<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gaming || Zone</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!--bootstrap css link-->
    <link rel="stylesheet" href="css/index.css"><!--css link-->
    <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script>
  </head>
  <body>
      <!-- navbar  start -->
          <nav class="navbar navbar-expand bg-dark">
            <div class="container">
              <a href="#" class="text-light navbar-brand">Admin Dashbord</a>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link text-light mt-2" href="#">{{Session::get('name')}}</a> </li>
                <li class="nav-item"><a class="nav-link" href="#"><img height="40px;" width="40px;" class="user-img" src="{{asset('image/head.png')}}" alt="asdf"> </a> </li>

              </ul>
            </div>
          </nav>
      <!-- navbar  end -->
      <!-- main content start -->

        <section class="mt-2" style="background-color: ; height: auto;">
          <div class="">
          <div class="row ml-1 mr-1">
            <!-- main content left side start -->

            <div class="col-md-12 col-lg-2 col-sm-12 text-center left-side" style="background-color: #34495E; height: auto " >
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link btn text-light  font-weight-bold" href="#"><i class="fas fa-house-user"></i><span class="ml-1">Dashbord</span> </a> </li>




        <div class="dropdown mt-1"><!-- start dropdown-->
          <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold text-light" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fab fa-slideshare"></i><span class="ml-1 text-light">Show File</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{url('all-filemanager')}}">ALL File</a>
            <a class="dropdown-item" href="{{url('add-filemanager')}}">ADD File</a>
          </div>
        </div><!-- end dropdown -->

        <div class="dropdown mt-1"><!-- start dropdown-->
          <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold text-light" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fab fa-slideshare"></i><span class="ml-1 ">Admin Pannel</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{url('/all-admin')}}">ALL Admin</a>
            <a class="dropdown-item" href="{{url('/register')}}">New Admin Register</a>
          </div>
        </div><!-- end dropdown -->


<!-- setings --><br>
        <h4 class="text-light"><i class="fad fa-sliders-h "></i>Setting's</h4>

      <a class="text-light font-weight-bold" href="{{url('logout')}}"><i class="fas fa-images"></i>Logout</a>









          </ul>
      </div>
            <!-- main content left side end-->

            <!-- main content right side start-->
            <div class="col-md-12 col-lg-10 col-sm-12" >

                @yield('admin_content')

            </div>
            <!-- main content right side end-->
          </div>
          </div>
        </section>








      <!-- main content end-->


<!-- javascript link bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
