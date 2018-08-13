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
        <div class="graph-visual tables-main">

            <h3 class="inner-tittle two">House Post Table </h3>
            <div class="graph">
                <div class="tables">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Titil</th>
                            <th>Division</th>
                            <th>Location</th>
                            <th style="width: 20%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($posts))
                            <?php
                                $i = 1;
                            ?>
                            @foreach($posts as $post)

                        <tr class="success">
                            <th scope="row">{{$i++}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->division}}</td>
                            <td>{{$post->location}}</td>
                            <td>
                                <a href="{{url('admin/post/edit/').'/'.$post->id}}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('admin/post/delete/').'/'.$post->id}}" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        <!--//forms-->
    </div>
@endsection