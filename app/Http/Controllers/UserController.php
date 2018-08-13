<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use Auth;

class UserController extends Controller
{
    public function index(){

        $userId = Auth::guard('user')->user()->id;
        $user = User::where('id',$userId)->first();
        $posts = DB::select("select * from house_posts");
        $owner = DB::select("select admins.name,admins.email,admin_details.* from admins join admin_details on admins.id = admin_details.id");

        $suggestion = DB::select("select * from house_posts where division like '$user->district'");
        $nearestowner = DB::select("select admins.name,admins.email,admin_details.* from admins join admin_details on admins.id = admin_details.id where admin_details.district like '$user->district'");


        return view('user.home',['posts'=>$posts,'owners'=>$owner,'suggestions'=>$suggestion,'nearestowners'=>$nearestowner]);
    }

    public function housePostByOwner($ownerId){

        $posts = DB::select("select * from house_posts where owner_id = '$ownerId'");
        $owner = DB::select("select admins.name,admins.email,admin_details.* from admins join admin_details on admins.id = admin_details.id where admins.id ='$ownerId'");
        return view('user.Owner.ownerPost',['posts'=>$posts,'owners'=>$owner]);

    }
}
