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
        <div class="forms-main col-md-6">

            <div class="graph-form">
                <h4 style="color: green; text-align: center">{{ Session::get('message') }}</h4>
                <div class="validation-form">
                    <h4 class="inner-tittle" style="text-align: center">Update Profile</h4>
                    <!---->
                    @if(isset($owners))
                        @foreach($owners as $owner)
                            <form method="post" action="{{url('admin/profile/save')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="vali-form">
                                    <div class="col-md-12 form-group1">
                                        <label class="control-label">Name</label>
                                        <input type="text" value="{{$owner->name}}"  name="name">
                                        <input type="hidden" value="{{$owner->id}}" name="id">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="vali-form">
                                    <div class="col-md-12 form-group1">
                                        <label class="control-label">Email</label>
                                        <input type="text"  name="email" value="{{$owner->email}}">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>

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
        @if($ownerDetails)
            @foreach($ownerDetails as $ownerDetail)
        <div class="forms-main col-md-6">
            <div class="graph-form">
                <h4 style="color: green; text-align: center">{{ Session::get('messageProfiledetails') }}</h4>
                <div class="validation-form">
                    <!---->
                    <h4 class="inner-tittle" style="text-align: center">Update Profile Details</h4>

                    <form method="post" action="{{url('admin/profile-details/update')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="vali-form">
                            <div class="col-md-12 form-group1">
                                <label class="control-label">Contract</label>
                                <input type="text" value="{{$ownerDetail->contract}}" required="" name="contract">
                                <input type="hidden" value="{{$ownerDetail->id}}" required="" name="id">
                                <input type="hidden" value="{{$ownerDetail->adminId}}" required="" name="adminId">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="vali-form">
                            <div class="col-md-12 form-group2">
                                <label class="control-label">Division</label>
                                <select type="text" name="district" class="form-group2">
                                    <option value="{{$ownerDetail->district}}">{{$ownerDetail->district}}</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Barisal">Barisal</option>
                                </select>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="vali-form">
                            <div class="col-md-12 form-group1">
                                <label class="control-label">Address</label>
                                <input type="text"  required="" name="address" value="{{$ownerDetail->address}}">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="vali-form">
                            <div class="col-md-12 form-group1">
                                <label class="control-label">Details</label>
                                <input type="text" value="{{$ownerDetail->details}}" required="" name="details">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="col-md-12 form-group1 ">
                            <label class="control-label">Picture</label>
                            <img src="{{asset($ownerDetail->picture)}}" class="control-label" style="width: 300px;margin: 2%">
                            <input type="file" name="picture">
                        </div>
                        <div class="clearfix"> </div>


                        <div class="col-md-12 form-group button-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        <div class="clearfix"> </div>
                    </form>

                    <!---->
                </div>

            </div>
        </div>
            @endforeach
        @else
            <div class="forms-main col-md-6">
                <div class="graph-form">
                    <h4 style="color: green; text-align: center">{{ Session::get('messageDetails') }}</h4>
                    <div class="validation-form">
                        <!---->
                        <p style="text-align: center">No Profile details added before please add new</p>
                        <h4 class="inner-tittle" style="text-align: center">Add Profile Details</h4>

                        <form method="post" action="{{url('admin/profile-details/save')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="vali-form">
                                <div class="col-md-12 form-group1">
                                    <label class="control-label">Contract</label>
                                    <input type="text" placeholder="Contract" required="" name="contract">
                                    <input type="hidden" value="{{Auth::guard('admin')->user()->id}}" required="" name="adminId">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-12 form-group2">
                                    <label class="control-label">Division</label>
                                    <select type="text" name="district" class="form-group2">
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Barisal">Barisal</option>
                                    </select>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-12 form-group1">
                                    <label class="control-label">Address</label>
                                    <input type="text"  name="address" placeholder="Address">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-12 form-group1">
                                    <label class="control-label">Details</label>
                                    <input type="text" placeholder="Details"  name="details">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="col-md-12 form-group1 ">
                                <label class="control-label">Picture</label>
                                <img src="" class="control-label" style="width: 300px;margin: 2%">
                                <input type="file" name="picture">
                            </div>
                            <div class="clearfix"> </div>


                            <div class="col-md-12 form-group button-2">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                            <div class="clearfix"> </div>
                        </form>

                        <!---->
                    </div>

                </div>
            </div>

            @endif
        <!--//forms-->
    </div>
@endsection