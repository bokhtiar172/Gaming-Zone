<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title></title>
  </head>
  <body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top: 15%;">
            <div class="  image-head">

              <p class="text-center">
                <img   class="" height="70px" width="70px" src="{{asset('image/head.png')}}" alt=""><br>
                <strong class="">GAMING ZONE</strong>
                </p>
<br>
                <div class="">
                  <?php
                    $msg=Session::get('massage');
                      if ($msg) {
                      echo "<h5 class='text-danger text-center'>$msg</h5>";
                        Session::put('massage',null);
                      }

                   ?>
                    <form method="POST" action="{{ url('get-login') }}">
                        @csrf

                        <div class="form-group row">


                            <div class="col-md-6">
                                <input style="margin-left: 57%" class="form-control" type="text" name="name" value="" placeholder="Full Name" required>
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6 ">
                                <input style="margin-left: 57%" class="form-control" type="number" name="phone" value="" placeholder="Mobail Number" required>
                            </div>
                        </div>

                        <div class="submit">


                        <input style="margin-left:53%;" type="submit" class=" text-center font-weight-bold  btn btn-info text-light" name="button" value="Continue">


                        </div>
                        <style media="screen">
                          @media (min-width:992px) {
                            .submit{
                              margin-left:14%
                            }
                          }

                          @media (min-width:1200px) {
                            .submit{
                              margin-left:20%
                            }
                          }

                        </style>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
