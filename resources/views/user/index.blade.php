@extends('user_dashbord')
@section('user_content')


        <section id="home" class="mt-4">
            <div class="sec-image">
              <div class="row">
                <div class="col-md-6 ml-3 mt-5">
                  <p class="h2 dasd text-light ">An Ultimate <br>Gaming Platform.</p><br>
                  <strong class="font-weight-bold h3 text-light">First Ever Gaming  Platform In Bangladesh</strong><br><br>
                    <span class="font-weight-bold lead" style="color:#fff;  " >Interested to Play FreeFire Tournaments? Want to earn money from playing FreeFire?
                      Well, Gaming Zone is the platform which makes this possible.
                      Download our Mobile application and join the gaming contests now!
                    </span>

                    <style media="screen">
                    @media screen and (max-width: 992px) {
                          body {
                            background-color: blue;
                            }
                          }
                    </style>

                </div>
                <div class="col-md-6 text-light ">


                       @foreach($allapp as $v_all)


                        <a href="{{$v_all->filemanager }}" download>
                            <span class="btn btn-light font-weight-bold ml-5 mt-5"><i class="fas fa-download"></i>Download Now</span>
                        </a>

                      @endforeach

                </div>

              </div>
            </div>
        </section>
      </section><br>
    </section><!-- navbar & content left site &right side end-->





<!-- -------------------------------------------------------------------------------------------->

<section id="screenshort"  class="screenshots text-center">
      <p class="text-center "style="background-color: #7392A3 " ><span class="text-center"> <strong class="h2 text-light ">App Screenshots</strong><br>
              <span class="text-light font-weight-bold h5 p-5">Check the screenshots below to get an idea of the app flaw and features</span>
       </span>
     </p>


<div class="container mt-2">
  <div class="row">
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-none d-lg-block">
            <div class="slide-box">
              <img src="{{asset('image/s1.jpg')}}" alt="First slide">
              <img src="{{asset('image/s2.jpg')}}" alt="First slide">
              <img src="{{asset('image/s4.jpg')}}" alt="First slide">
              <img src="{{asset('image/s3.jpg')}}" alt="First slide">
            </div>
          </div>
          <div class="d-none d-md-block d-lg-none">
            <div class="slide-box">
              <img src="{{asset('image/s1.jpg')}}" alt="First slide">
              <img src="{{asset('image/s4.jpg')}}" alt="First slide">
              <img src="{{asset('image/s2.jpg')}}" alt="First slide">
              <img src="{{asset('image/s3.jpg')}}" alt="First slide">
            </div>
          </div>
          <div class="d-none d-sm-block d-md-none">
            <div class="slide-box">
              <img src="{{asset('image/s3.jpg')}}" alt="First slide">
              <img src="{{asset('image/s4.jpg')}}" alt="First slide">

            </div>
          </div>
          <div class="d-block d-sm-none">
            <img src="{{asset('image/s1.jpg')}}" alt="First slide">

            <img src="{{asset('image/s4.jpg')}}" alt="First slide">
            <img src="{{asset('image/s2.jpg')}}" alt="First slide">
            <img src="{{asset('image/s3.jpg')}}" alt="First slide">
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-none d-lg-block">
            <div class="slide-box">
              <img src="{{asset('image/s2.jpg')}}" alt="First slide">
              <img src="{{asset('image/s3.jpg')}}" alt="First slide">
              <img src="{{asset('image/s4.jpg')}}" alt="First slide">
              <img src="{{asset('image/s1.jpg')}}" alt="First slide">


            </div>
          </div>
          <div class="d-none d-md-block d-lg-none">
            <div class="slide-box">

              <img src="{{asset('image/s3.jpg')}}" alt="First slide">
              <img src="{{asset('image/s4.jpg')}}" alt="First slide">
              <img src="{{asset('image/s1.jpg')}}" alt="First slide">
              <img src="{{asset('image/s2.jpg')}}" alt="First slide">

            </div>
          </div>
          <div class="d-none d-sm-block d-md-none">
            <div class="slide-box">
              <img src="{{asset('image/s2.jpg')}}" alt="First slide">
              <img src="{{asset('image/s3.jpg')}}" alt="First slide">
              <img src="{{asset('image/s1.jpg')}}" alt="First slide">

              <img src="{{asset('image/s4.jpg')}}" alt="First slide">

            </div>
          </div>
          <div class="d-block d-sm-none">
            <img src="image/s3.jpg" alt="First slide">
            <img src="{{asset('image/s4.jpg')}}" alt="First slide">
            <img src="{{asset('image/s1.jpg')}}" alt="First slide">
            <img src="{{asset('image/s2.jpg')}}" alt="First slide">

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<br><br>
</section>









<!------------------------------------------------------------------------------ -->

  <section id="download" class="downloadapp">
    <br><br>
    <div class="text-center ">
        <p class="text-light h2">Download This App Today!</p>
        <p class="text-light">Earn Through Gaming. Go and give it a try now. Happy gaming to all</p><br>
        <p>
          @foreach($allapp as $v_all)


           <a href="{{$v_all->filemanager }}" download>
               <span class="btn btn-light font-weight-bold"><i class="fas fa-download"></i>Download Now</span>
           </a>

         @endforeach

          <br><br><br>
    </div>
  </section>



@endsection
