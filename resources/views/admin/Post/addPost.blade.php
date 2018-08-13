@extends('admin.master')
@section('mainContent')
    <div class="outter-wp">
        <!--/sub-heard-part-->
        <div class="sub-heard-part">
            <ol class="breadcrumb m-b-0">
                <li><a href="index.html">Home</a></li>
                <li class="active">Add Post</li>
                <li style="float: right" class="active"><a href="index.html">Manage Post</a></li>
            </ol>
        </div>
        <!--/sub-heard-part-->
        <!--/forms-->
        <div class="forms-main">
            <h2 class="inner-tittle">House Post</h2>
            <div class="graph-form">
                <h4 style="color: green">{{ Session::get('message') }}</h4>
                <div class="validation-form">
                    <!---->

                    <form method="post" action="{{url('admin/post/save')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="vali-form">
                            <div class="col-md-8 form-group1">
                                <label class="control-label">House Title</label>
                                <input type="text" placeholder="House Title" required="" name="title">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="vali-form">
                            <div class="col-md-8 form-group1">
                                <label class="control-label">Price</label>
                                <input type="number"  required="" name="price">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-8 form-group2 group-mail">
                            <label class="control-label">House Division</label>
                            <select name="division" type="text">
                                <option value="Dhaka">Dhaka</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Mymensing">Mymensing</option>
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="vali-form">
                            <div class="col-md-8 form-group1">
                                <label class="control-label">Location</label>
                                <input type="text" placeholder="House Title" required="" name="location">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="col-md-8 form-group1 ">
                            <label class="control-label">House Picture</label>
                            <input type="file" name="image">
                        </div>
                        <div class="clearfix"> </div>
                        <div class="col-md-8 form-group1 ">
                            <label class="control-label">House Details</label>
                            <textarea placeholder="House Details..." required="" name="details"></textarea>
                        </div>
                        <div class="clearfix"> </div>


                        <div class="col-md-12 form-group button-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                        <div class="clearfix"> </div>
                    </form>

                    <!---->
                </div>

            </div>
        </div>
        <!--//forms-->
    </div>
    @endsection