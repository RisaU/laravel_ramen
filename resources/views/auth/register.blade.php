@extends('layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>
        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf
              <div class="form-group row"><!--First Name -->
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
               <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="John" required autofocus>
                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
               </div>
              </div>
              <div class="form-group row"><!--Last Name -->
                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                <div class="col-md-6">
                  <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" placeholder="Smith" required>
                  @if ($errors->has('lastname'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="form-group row"><!-- phone -->
                  <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}
                    {{-- <br><span class="note">(123-456-7890)</span> --}}
                  </label>
                  <div class="col-md-6"><!-- pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" -->
                      <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="0123456789" required>

                      @if ($errors->has('phone'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              <div class="form-group row"><!-- email -->
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="johnsmith@example.com" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="form-group row"><!-- birthdayne -->
                <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>
                <div class="col-md-6">
                    <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required>
                    @if ($errors->has('dob'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('dob') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group row"><!-- gender -->
                <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                  <div class="col-md-6" style="padding-top: 8px">
                    <input id="gender-m" type="radio" name="gender" value="male" checked="checked">
                    <label for="gender-m">Male</label>
                    <input id="gender-f" type="radio" name="gender" value="female">
                    <label for="gender-f">Female</label>
                    @if ($errors->has('gender'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('gender') }}</strong>
                      </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row"><!-- password -->
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="form-group row"><!-- paaword confirm -->
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
              </div>
              <div class="form-group row">
                <p class="col-md-12 text-md-center" style="padding-top: 8px">By clicking Register, you agree to our <span><a href="#">Terms</a></span>,
                and <span><a href="#">Data Policy</a></span>.</p>
              </div>
              <div class="form-group row mb-0"><!-- submit -->
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
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
