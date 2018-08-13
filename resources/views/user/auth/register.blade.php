@extends('user.layout.auth')

@section('mainContent')
    <!--/login-->
<style>

</style>
    <div class="error_page">
        <!--/login-top-->

        <div class="error-top">
            <h2 class="inner-tittle page">Augment</h2>
            <div class="login">
                <h3 class="inner-tittle t-inner">Register</h3>
                <form class="form-horizontal" method="POST" action="{{ url('user/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <!-- <label for="name" class="col-md-3 control-label">Name</label> -->

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <!-- <label for="email" class="col-md-3 control-label">E-Mail Address</label> -->

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                        <!-- <label for="email" class="col-md-3 control-label">E-Mail Address</label> -->

                        <div class="col-md-12">
                            <select id="district" name="district" type="text" class="form-control">
                                <option value="Dhaka">Dhaka</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Rangpur">Rangpur</option>

                            </select>

                            @if ($errors->has('district'))
                                <span class="help-block">
                                          <strong>{{ $errors->first('district') }}</strong>
                                      </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <!-- <label for="password" class="col-md-3 control-label">Password</label> -->

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password"  placeholder="Password"required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <!-- <label for="password-confirm" class="col-md-3 control-label">Confirm Password</label> -->

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!--//login-top-->

    <!--//login-->
@endsection
