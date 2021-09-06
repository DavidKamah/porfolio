@extends('layout.master')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="card-body">
      <form action="{{url('post-login')}}" method="POST" id="logForm">
            {{ csrf_field() }}
        <div class="form-group">
          <label class="small mb-1" for="inputEmailAddress">Email</label>
            <input class="form-control py-4" id="inputEmailAddress" name="email" type="email" placeholder="Enter email address" />
                  @if ($errors->has('email'))
              <span class="error">{{ $errors->first('email') }}</span>
                        @endif 
        </div>
        <div class="form-group">
        <label class="small mb-1" for="inputPassword">Password</label>
            <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                  @if ($errors->has('password'))
              <span class="error">{{ $errors->first('password') }}</span>
                        @endif
        </div>
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                        </div>
              </div>
            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
            <a class="small" href="#">Forgot Password?</a>
          <button class="btn btn-primary" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
</div> 
@endsection            
   

    
