@extends('admin.master')
@section('mainContent')
    <div class="outter-wp">
        <!--/sub-heard-part-->
        <div class="sub-heard-part">
            <ol class="breadcrumb m-b-0">
                <li><a href="index.html">Home</a></li>
                <li class="active">Edit Post</li>
                <li style="float: right" class="active"><a href="{{url('admin/post/manage')}}">Manage Post</a></li>
            </ol>
        </div>
        <!--/sub-heard-part-->
        <!--/forms-->
        <div class="forms-main">
            <h2 class="inner-tittle">House Post</h2>
            <div class="graph-form">
                <h4 style="color: green; text-align: center">{{ Session::get('message') }}</h4>
                <div class="validation-form">
                    <!---->
                    @if(isset($posts))
                        @foreach($posts as $post)

                    <form method="post" action="{{url('admin/post/update')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="vali-form">
                            <div class="col-md-8 form-group1">
                                <label class="control-label">House Title</label>
                                <input type="text" value="{{$post->title}}" required="" name="title">
                                <input type="hidden" value="{{$post->id}}" required="" name="id">
                                <input type="hidden" value="{{$post->owner_id}}" required="" name="owner_id">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="vali-form">
                            <div class="col-md-8 form-group1">
                                <label class="control-label">Price</label>
                                <input type="number"  required="" name="price" value="{{$post->price}}">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-8 form-group2 group-mail">
                            <label class="control-label">House Division</label>
                            <select name="division" type="text">
                                <option value="{{$post->division}}">{{$post->division}}</option>
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
                                <input type="text" value="{{$post->location}}" required="" name="location">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="col-md-8 form-group1 ">
                            <label class="control-label">House Picture</label>
                            <img src="{{asset($post->picture)}}" class="control-label" style="width: 300px;margin: 2%">
                            <input type="file" name="image">
                        </div>
                        <div class="clearfix"> </div>
                        <div class="col-md-8 form-group1 ">
                            <label class="control-label">House Details</label>
                            <textarea  required="" name="details">{{$post->details}}</textarea>
                        </div>
                        <div class="clearfix"> </div>


                        <div class="col-md-12 form-group button-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        <div class="clearfix"> </div>
                    </form>
                        @endforeach
                    @endif

                    <!---->
                </div>

            </div>
        </div>
        <!--//forms-->
    </div>
    @endsection