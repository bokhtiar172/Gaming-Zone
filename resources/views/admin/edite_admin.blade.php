@extends('admin_dashboard')
@section('admin_content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <p class="text-center">
                <img   class="" height="70px" width="70px" src="{{asset('image/head.png')}}" alt=""><br>
                <strong class="">GAMING ZONE Edite REGISTER</strong>
                </p>

                <div class="card-body">
                    <form method="POST" action="{{ url('update_admin/'.$edite_admin->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right font-weight-bold ">{{ __('Enter  Admin Name') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="name" value="{{$edite_admin->name}}" placeholder="Unique Name Here Type...">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right font-weight-bold">{{ __('Enter  Admin Phone Number') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="number" placeholder="Unique Number Here Type..." name="phone" value="{{$edite_admin->phone}}">
                            </div>
                        </div>





                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary float-right">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
