<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function index(){

        $posts = DB::select("select * from house_posts");
        $owner = DB::select("select admins.name,admins.email,admin_details.* from admins join admin_details on admins.id = admin_details.id");
        return view('FontEnd.Home.homeContent',['posts'=>$posts,'owners'=>$owner]);
    }

    public function housePostByOwner($ownerId){
        $posts = DB::select("select * from house_posts where owner_id = '$ownerId'");
        $owner = DB::select("select admins.name,admins.email,admin_details.* from admins join admin_details on admins.id = admin_details.id where admins.id ='$ownerId'");
        return view('FontEnd.Owner.ownerPost',['posts'=>$posts,'owners'=>$owner]);

    }
}
