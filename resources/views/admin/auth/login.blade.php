@extends('admin.layout.auth')

@section('mainContent')
    <div class="error_page">
        <!--/login-top-->

        <div class="error-top">
            <h2 class="inner-tittle page">Augment</h2>
            <div class="login">
                <h3 class="inner-tittle t-inner">Login</h3>
                <div class="buttons login">
                    <ul>
                        <li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
                        <li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <form method="POST" action="{{ url('admin/login') }}">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" placeholder="E-mail address" name="email" required >
                    <input type="password" placeholder="Password" name="password" class="form-control">
                    <div class="submit"><input type="submit" value="Login" ></div>
                    <div class="clearfix"></div>

                    <div class="new">
                        <p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Forgot Password ?</label></p>
                        <p class="sign">Do not have an account ? <a href="{{url('admin/register')}}">Sign Up</a></p>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>

        </div>

        <!--//login-top-->
    </div>

    <!--//login-->
@endsection
