@extends('user.master')
@section('mainContent')
    <!--Slider-->

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

@endsection