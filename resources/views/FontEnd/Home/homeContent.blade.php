@extends('FontEnd.master')
@section('mainContent')
<!--Slider-->

<div class="slider">
    <div class="callbacks_container w3l">
        <ul class="rslides" id="slider">
            <li>
                <div class="slider-img w3-oneimg">
                </div>

            </li>
            <li>
                <div class="slider-img w3-twoimg">
                </div>

            </li>
            <li>
                <div class="slider-img w3-threeimg">
                </div>

            </li>
            <li>
                <div class="slider-img w3-fourimg">
                </div>
            </li>

        </ul>

    </div>
    <div class="clearfix"></div>
</div>
<!--//Slider-->
<div class="about w3 " id="about">
    <div class="container">

        <div class="about-top-grid ">
            <h4>About us
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed odio consequat, tristique elit sed, molestie nulla.
                Mauris et quam leo. Quisque tincidunt facilisis rutrum. Etiam mattis arcu vitae velit sagittis vehicula. Duis posuere
                ex in mollis iaculis. Suspendisse tincidunt ut velit id euismod.vulputate turpis porta ex sodales, dignissim hendrerit
                eros sagittis. Curabitur lacinia dui ut luctus congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis

            </p>
        </div>
    </div>
</div>
<!-- Stats -->
<div class="stats-agileits" id="stats">
    <div class="container">
        <h3 class="title-w3-agile">Stats</h3>
        <div class="stats-info agileits w3layouts">
            <div class="col-md-3 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-1">
                <div class=" agileits-w3layouts counter">{{App\User::count()}}</div>
                <div class="stat-info-w3ls">
                    <h4 class="agileits w3layouts">clients</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-2">

                <div class=" agileits-w3layouts counter">{{App\Admin::count()}}</div>
                <div class="stat-info-w3ls">
                    <h4 class="agileits w3layouts ">Owner</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 stats-grid agileits w3layouts stats-grid-3">

                <div class=" agileits-w3layouts counter" >{{App\HousePost::count()}}</div>
                <div class="stat-info-w3ls">
                    <h4 class="agileits w3layouts ">House</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 stats-grid agileits w3layouts stats-grid-4">

                <div class=" agileits-w3layouts counter">7</div>
                <div class="stat-info-w3ls">
                    <h4 class="agileits w3layouts">Division</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- //Stats -->
<!--news-->
<div class="event-more" id="evennts">
    <div class="container">
        <h3 class="title-w3-agile">House Post</h3>

        <div class="w3_agile_grids">
            @if(isset($posts))
                <?php
                $i = 1;
                ?>
                @foreach($posts as $post)
            <div class="col-md-4 col-sm-4 services-left">
                <div class="w3_agileits_events_grid" data-aos="zoom-in">
                    <div class="wthree_events_grid">
                        <div class="wthree_events_grid1">
                            <img src="{{asset($post->picture)}}" alt=" " class="img-responsive" style="height: 200px;width: 350px">
                        </div>
                        <div class="agileinfo_events_grid1">
                            <h5><a href="#" data-toggle="modal" data-target="#myModal{{$post->owner_id}}">{{$post->title}}</a></h5>
                            <p class="para-agileits-w3layouts"><span><strong>{{$post->location}}, {{$post->division}}</strong></span></p>
                            <h5><strong style="color: #2a9055">{{$post->price}} TK</strong></h5>
                            <div class="more-bttn">
                                <a href="#" data-toggle="modal" data-target="#myModal{{$post->owner_id}}">Contract Details..</a>
                            </div>
                        </div>
                    </div>
                </div>
                @if($i%3 == 0)
                <div class="clearfix"></div>
                @endif
                <?php
                $i++;
                ?>
            </div>
                @endforeach
            @endif

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- bootstrap-pop-up -->
@if(isset($owners))
    @foreach($owners as $owner)
<div class="modal video-modal fade" id="myModal{{$owner->adminId}}" tabindex="-1" role="dialog" aria-labelledby="myModal{{$owner->adminId}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Contract Details
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" style="margin: 1%;padding: 1%">
                <img src="{{asset($owner->picture)}}" alt=" "class="img-responsive" style="height: 500px;width: 700px;margin-bottom: 2%"/>
                <h3 style="text-align: center;margin: 1%;padding: 1%;color: #2d995b"><strong>{{$owner->name}}</strong></h3>
                <h5 style="text-align: center;margin: 1%;padding: 1%;color: #4c110f"><strong>{{$owner->email}}</strong></h5>
                <h5 style="text-align: center;margin: 1%;padding: 1%;color: #4c110f"><strong>{{$owner->address}}</strong></h5>
                <h5 style="text-align: center;margin: 1%;padding: 1%;color: #4c110f"><strong>{{$owner->contract}}</strong></h5>
                <p style="text-align: center">{{$owner->details}}
                </p>


                {{--<p style="text-align: center"><strong>Send a Short Message to the owner</strong></p>--}}
                {{--<div class="subscribe">--}}
                    {{--<div class="container">--}}

                            {{--<div class="letter-sub" style="width: 48%;margin: 0">--}}
                                {{--<form action="#" method="post">--}}
                                    {{--<div class="sub-email">--}}
                                        {{--<input type="email" name="message" placeholder="Message" required="">--}}

                                    {{--</div>--}}
                                    {{--<div class="send-button agileits w3layouts">--}}
                                        {{--<button class="btn btn-primary">Send</button>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

            </div>

        </div>
    </div>
</div>
@endforeach
    @endif
<!-- //bootstrap-pop-up -->

<!--//news-->

<!-- gallery -->
<div id="gallery" class="gallery">

    <div class="container">
        <h3 class="title-w3-agile" >Portfolio</h3>
        <div class="agile_gallery_grids">
            @if(isset($posts))
                @foreach($posts as $post)
            <div class="col-sm-4 col-xs-4 agile_gallery_grid">
                <div class="w3ls_gallery_grid-top mid-t">
                    <a href="{{asset($post->picture)}}" class="lsb-preview wthree_p_grid" data-lsb-group="header">
                        <img src="{{asset($post->picture)}}" alt=" " class="img-responsive" style="height: 300px"/>
                        <div class="agileinfo_content_wrap">
                            <div class="agileits_content">
                                <h3>{{$post->title}}</h3>
                                <p>{{$post->location}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
                @endforeach
            @endif

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //gallery -->

<!--subscribe-->
{{--<div class="subscribe">--}}
    {{--<div class="container">--}}
        {{--<div class="rows">--}}
            {{--<div class="click">--}}
                {{--<h3 class="title-w3-agile">Subscribe</h3>--}}
                {{--<p>consequatur, vel illum qui--}}
                    {{--dolorem eum fugiat quo voluptas nulla pariatur.--}}
                    {{--Ut enim ad minim veniam,--}}
                    {{--quis nostrud exercitation ullamco laboris nisi--}}
                {{--</p>--}}
            {{--</div>--}}


            {{--<div class=" letter-sub">--}}
                {{--<form action="#" method="post">--}}
                    {{--<div class="sub-email">--}}
                        {{--<input type="email" Name="email" placeholder="Email" required="">--}}

                    {{--</div>--}}
                    {{--<div class="send-button agileits w3layouts">--}}
                        {{--<button class="btn btn-primary">Click</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- //subscribe -->
<!-- team -->
<div class="team" id="team">

    <div class="container">
        <h3 class="title-w3-agile">House Owners</h3>
        <div class="agileits-team-grids">
            @if(isset($owners))
                <?php
                $i = 1;
                ?>
                @foreach($owners as $owner)
                    <a href="{{url('house-post/').'/'.$owner->id}}">
            <div class="col-md-3  col-sm-6 col-xs-6 agileits-team-grid top">
                <div class="team-info">
                    <img src="{{asset($owner->picture)}}" alt="" style="height: 250px">
                    <div class="team-caption">
                        <h4>{{$owner->name}}</h4>
                        <p>{{$owner->address}}</p>
                        <p>{{$owner->email}}</p>
                        <p>{{$owner->contract}}</p>
                        <ul>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-rss"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
                    </a>
                    @if($i%4 == 0)
                            <div class="clearfix"></div>
                        @endif
                    <?php
                        $i++;
                        ?>
                @endforeach
            @endif

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //team-->
<!--contact -->
{{--<div class="contact-top">--}}
    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3745.657945920633!2d94.925709!3d20.148312999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b7d19881308ae9%3A0x229dbaae31b864b9!2sZarmani!5e0!3m2!1sen!2sin!4v1419654909172"></iframe>--}}
{{--</div>--}}
{{--<div class="contact" id="contact">--}}
    {{--<div class="container">--}}
        {{--<h3 class="title-w3-agile">Contact Us</h3>--}}
        {{--<div class="contact-form">--}}
            {{--<form action="#" method="post">--}}
                {{--<div class="col-md-6 col-sm-6 col-xs-6 left-way-w3">--}}
                    {{--<div class=" form-left" >--}}
                        {{--<input type="text" Name="name" placeholder="Name" required="">--}}
                    {{--</div>--}}
                    {{--<div class=" form-left" >--}}
                        {{--<input type="text" Name="last name" placeholder="Last Name" required="">--}}
                        {{--<div class="clearfix"> </div>--}}
                    {{--</div>--}}
                    {{--<div class=" form-right ">--}}
                        {{--<input class="email" type="email" Name="email" placeholder="Email" required="">--}}
                    {{--</div>--}}
                    {{--<div class="form-right phone" >--}}
                        {{--<input  type="text" Name="phone" placeholder="Phone" required="">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-6 col-sm-6 col-xs-6 right-way-w3">--}}
                    {{--<textarea placeholder="Message" required=""></textarea>--}}
                    {{--<input type="submit" value="Submit" >--}}
                {{--</div>--}}
                {{--<div class="clearfix"> </div>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!--//contact -->
    @endsection