<?php

namespace App\Http\Controllers;

use App\AdminDetails;
use App\HousePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class AdminController extends Controller
{
    public function index(){
        $id = Auth::guard('admin')->user()->id;
        $admindetails = DB::select("select * from admin_details where adminId = '$id'");
        return view('admin.home',['admindetails'=>$admindetails]);
    }
    public function addPost(){
        return view('admin.Post.addPost');
    }
    public function savePost(Request $request){
        $id = Auth::guard('admin')->user()->id;
        $imageUrl = $this->postImageUrl($request);
        DB::table('house_posts')->insert([
            'owner_id' => $id,
            'title' => $request->title,
            'price' => $request->price,
            'division' => $request->division,
            'location' => $request->location,
            'picture' => $imageUrl,
            'details' => $request->details,
            'status'=> '1'

        ]);
        return redirect()->back()->with('message','Posts Added Successfully');
    }

    private function postImageUrl($request){
        ini_set('memory_limit','256M');
        $postImage = $request->file('image');
        if($postImage){
            $imageName = $postImage->getClientOriginalName();
            $uploadPath = 'Admin/images/Post/';
            $postImage->move($uploadPath,$imageName);
            $imageUrl = $uploadPath.$imageName;
        }else{
            $imageUrl = 'not uploaded';
        }
        return $imageUrl;
    }

    public function managePost(){
        $id = Auth::guard('admin')->user()->id;
        $posts = DB::select("select * from house_posts where owner_id = '$id'");
        return view('admin.post.managePost',['posts'=>$posts]);
    }

    public function editPost($id){
        $posts = DB::select("select * from house_posts where id = $id");
        return view('admin.Post.editPost',['posts'=>$posts]);
    }

    public function updatePost(Request $request)
    {
        $imageUrl = $this->imageExistsStutus($request);


        DB::table('house_posts')->where('id',$request->id)->update([
            'owner_id'=>$request->owner_id,
            'title'=>$request->title,
            'price'=>$request->price,
            'division'=>$request->division,
            'location'=>$request->location,
            'details'=>$request->details,
            'picture'=>$imageUrl,

        ]);

        return redirect()->back()->with('message','Post info Updated Successfully');

    }
    private function imageExistsStutus($request){
        $postId=HousePost::where('id',$request->id)->first();
        ini_set('memory_limit','256M');
        $postImage=$request->file('image');
        if($postImage){
            $oldImageUrl = $postId->picture;
            if($oldImageUrl){
                unlink($oldImageUrl);
            }
            $imageName = $postImage->getClientOriginalName();
            $uploadPath ='Admin/images/Post/';
            $postImage->move($uploadPath,$imageName);
            $imageUrl =$uploadPath.$imageName;

        }
        else{

            $imageUrl=$postId->picture;
        }
        return $imageUrl;


    }

    public function deletePost($id){
        $deletePost = DB::select("delete from house_posts where id = '$id'");
        return redirect()->back()->with('message','Post Deleted Successfully');
    }

    public function editProfile(){
        $id = Auth::guard('admin')->user()->id;
        $owner = DB::select("select * from admins where id = '$id'");
        $ownerDetails = DB::select("select * from admin_details where adminId = '$id'");
        return view('admin.Profile.updateProfile',['owners'=>$owner,'ownerDetails'=>$ownerDetails]);

    }

    public function updateProfile(Request $request)
    {
        $id = Auth::guard('admin')->user()->id;
        DB::table('admins')->where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);

        return redirect()->back()->with('message','Profile Updated Successfully');

    }

    public function saveProfileDetails(Request $request){
        $id = Auth::guard('admin')->user()->id;
        $imageUrl = $this->profileImageUrl($request);
        DB::table('admin_details')->insert([
            'adminId' => $id,
            'contract' => $request->contract,
            'district'=>$request->district,
            'address' => $request->address,
            'details' => $request->details,
            'picture' => $imageUrl,

        ]);
        return redirect()->back()->with('messageDetails','Profile Added Successfully');
    }

    private function profileImageUrl($request){
        ini_set('memory_limit','256M');
        $profileImage = $request->file('picture');
        if($profileImage){
            $imageName = $profileImage->getClientOriginalName();
            $uploadPath = 'Admin/images/Profile/';
            $profileImage->move($uploadPath,$imageName);
            $imageUrl = $uploadPath.$imageName;
        }else{
            $imageUrl = 'not uploaded';
        }
        return $imageUrl;
    }

    public function updateProfileDetails(Request $request)
    {
        $imageUrl = $this->profileImageExistsStutus($request);


        DB::table('admin_details')->where('id',$request->id)->update([
            'adminId'=>$request->adminId,
            'contract'=>$request->contract,
            'district'=>$request->district,
            'address'=>$request->address,
            'details'=>$request->details,
            'picture'=>$imageUrl,

        ]);

        return redirect()->back()->with('messageProfiledetails','Profile Updated Successfully');

    }
    private function profileImageExistsStutus($request){
        $profileId=AdminDetails::where('id',$request->id)->first();
        ini_set('memory_limit','256M');
        $profileImage=$request->file('picture');
        if($profileImage){
            $oldImageUrl = $profileId->picture;
            if($oldImageUrl){
                unlink($oldImageUrl);
            }
            $imageName = $profileImage->getClientOriginalName();
            $uploadPath ='Admin/images/Profile/';
            $profileImage->move($uploadPath,$imageName);
            $imageUrl =$uploadPath.$imageName;
        }
        else{

            $imageUrl=$profileId->picture;
        }
        return $imageUrl;

    }


}
