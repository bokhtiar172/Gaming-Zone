

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <!-- bootstrap css link start -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- bootstrap css link end -->
        <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script>

        <link rel="shortcut icon" type="image/x-icon" href="image/head.png">

    <title>Gaming || zone</title>
  </head>




  <body><!-- start of body -->

    <section class="fully-wrapper-content "><!-- navbar & content left site &right side start-->
      <section class="wrapper-container">
        <section class="asd"><!-- navbar wrapper start -->
            <div class="">
                <!-- navbar start here -->
                    <nav class="navbar navbar-expand-lg navbar-light   fixed-top" style="background-color:#34495E ">
                    <a class="navbar-brand text-light" href="#"><img height="40px" width="40px;" src="image/head.png" alt=""> <span class="font-weight-bold">GAMING ZONE</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-light" href="{{url('/')}}">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="{{url('screenshort')}}">SCREENSHOT</a>
                        </li>
                        <li class="nav-item">
                          <a  class="nav-link text-light" href="{{url('download')}}">DOWNLOAD APP</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ABOUT US
                          </a>
                          <div class="dropdown-menu" style="background-color: #192839;" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item text-light" href="{{url('about1')}}">Privacy Policy</a>
                            <a class="dropdown-item text-light" href="{{url('about2')}}">Fair Play Policy</a>
                            <a class="dropdown-item text-light" href="{{url('about3')}}">Refund & Cancellation Policy</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="{{url('/contact')}}">CONTACT US</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
                <!-- navbar end here-->
            </div>
        </section><!-- navbar wrapper end-->


        <section id="screenshort"  class="screenshots"><br><br> <br>
          <p class="text-center"><span class="text-center"> <strong class="h2 text-light ">App Screenshots</strong><br>
                  <span class="text-light font-weight-bold h5">Check the screenshots below to get an idea of the app flaw and features</span>
           </span></p><br><br>
           <div class="container">
             <div class="row ">
               <div class="col-md-6 col-sm-12 col-lg-3 col-xl-3">
                 <div class="card" style="width: 14rem;">
                   <img height="400px" class="card-img-top" src="image/s1.jpg" alt="Card image cap">
                 </div>
               </div>

               <div class="col-md-6 col-sm-12 col-lg-3 col-xl-3">
                 <div class="card" style="width: 14rem;">
                   <img height="400px" class="card-img-top" src="image/s2.jpg" alt="Card image cap">
                 </div>
               </div>

               <div class="col-md-6 col-sm-12 col-lg-3 col-xl-3">
                 <div class="card" style="width: 14rem;">
                   <img height="400px" class="card-img-top" src="image/s3.jpg" alt="Card image cap">
                 </div>
               </div>
               <div class="card" style="width: 14rem;">
                 <img height="400px" class="card-img-top" src="image/s4.jpg" alt="Card image cap">
               </div>

             </div><br><br>
           </div>

        </section>





        <!----------------------------------------------------------------------------------------- -->
          <section class="footer text-center">
            <div class="container"><br><br><br>
                <div class="row">
                  <div class="col-md-4">
                    <span class="text-light font-weight-bold">QUICK LINKS</span>
                    <hr>
                    <ul style=" list-style: none;">
                      <li><a class="text-light" href="{{url('/')}}"><i class="fas fa-home"></i> HOME</a>  </li>
                      <li><a class="text-light" href="{{url('/screenshort')}}"><i class="fas fa-camera"></i> SCREENSHOT</a> </li>
                      <li><a class="text-light" href="{{url('/download')}}"><i class="fas fa-download"></i> DOWNLOAD APP</a> </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-home"></i> ABOUT US
                        </a>
                        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item text-light" href="{{url('about1')}}">Privacy Policy</a>
                          <a class="dropdown-item text-light" href="{{url('about2')}}">fair paly Policy</a>
                          <a class="dropdown-item text-light" href="{{url('about3')}}">Refund & Cancellation Policy</a>
                        </div>
                      </li>
                      <li><a class="text-light" href="{{url('contact')}}"><i class="fas fa-id-badge"></i> CONTACT</a> </li>

                    </ul>
                  </div>
                  <div class="col-md-4">
                    <span class="font-weight-bold text-light">GAMING ZONE ANDROID APP</span>
                    <hr>
                    <div class="" style="">
          <div class="">
        <br>

        <?php
        $allapp=DB::table('filemanagers')->where('file_status',1)->get();
         ?>
        @foreach($allapp as $v_all)


         <a href="{{$v_all->filemanager }}" download>
             <span class="btn btn-light font-weight-bold" style="margin-left: 26%; "><i class="fas fa-download"></i>Download Now</span>
         </a>

        @endforeach

            <br>

          </div>
        </div>
                  </div>
                  <div class="col-md-4">
                    <span class="text-light font-weight-bold">FOLLOW US</span><hr>
                    <a class="btn btn-info" href="https://www.facebook.com/Gaming-Zone-105213311218222/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a class="btn btn-danger" href="https://www.youtube.com/channel/UCy_JdFJWQrtukHJqj5v87dg" target="_blank"><i class="fab fa-youtube"></i></a>

                  </div>
                </div>
            </div><br><br>
          </section>




            <!-- bootstarp javascript link -->
              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
            <!-- bootstrap end jqery link -->

          </body><!-- end of body -->

        </html>
