@extends('admin.master')
@section('mainContent')
    <div class="outter-wp">
        <!--custom-widgets-->
        <div class="custom-widgets">
            <div class="row-one">
                <div class="col-md-3 widget">
                    <div class="stats-left ">
                        <h5>Total</h5>
                        <h4> Owner</h4>
                    </div>
                    <div class="stats-right">
                        <label>{{App\Admin::count()}}</label>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 widget states-mdl">
                    <div class="stats-left">
                        <h5>Total</h5>
                        <h4>House</h4>
                    </div>
                    <div class="stats-right">
                        <label>{{App\HousePost::count()}}</label>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 widget states-thrd">
                    <div class="stats-left">
                        <h5>Today</h5>
                        <h4>Tasks</h4>
                    </div>
                    <div class="stats-right">
                        <label>51</label>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 widget states-last">
                    <div class="stats-left">
                        <h5>Today</h5>
                        <h4>Alerts</h4>
                    </div>
                    <div class="stats-right">
                        <label>30</label>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--//custom-widgets-->

        <!--//outer-wp-->
    </div>
@endsection
