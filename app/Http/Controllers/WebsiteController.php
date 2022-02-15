<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\About_skill;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Blog_Category;
use App\Models\Portfolio;
use App\Models\Portfolio_Category;
use App\Models\Client_review;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\User;

use Carbon\carbon;


class WebsiteController extends Controller
{
    //
    public function index()
    {
        $about_list = About::all();
        $about_skill = About_skill::all();
        $service = Service::all();
        return view('frontend/index',compact('about_list','about_skill','service'));
    }

    public function contactprocess(Request $req)
    {

       Contact::insert([
           'name'=>$req->name,
           'email'=>$req->email,
           'subject'=>$req->subject,
           'phone_no'=>$req->phone,
           'message'=>$req->message,
           'created_at'=>Carbon::now()
       ]);
    //    Session::flass('success','Message Send...');
        //  return back()->with('success','Message Has Been Send');
    }

    public function blog(Request $req)
    {
      // $bloglist = Blog::simplePaginate(4);
      // $cat_id = $req->catid;

      $bloglist = Blog_Category::all();
      $cntlist = Blog::all();
      // $post_list = Blog::where('cat_id',$cat_id)->count();

      return view('frontend/blog',compact('bloglist','cntlist'));
    }

    public function bloglist(Request $req ,$category_id)
    {
     $cat_id = $req->category_id;
     // return $cat_id;
    //  $blog_cat = Blog_Category::all();
      $blog_cat = Blog::find($cat_id);

      // $blog_details = Blog::find($blog_id);
      // $post = Blog::where('cat_id',$category_id);
      $cat_id = $req->category_id;
     $post_list = Blog::where('cat_id',$cat_id)->count();

      // $post = Blog::all()->where('cat_id',$cat_id);
      $post = Blog::where('cat_id',$cat_id)->get();

      // $post2 = Blog::count()->where('cat_id',$cat_id);



    return view('frontend/bloglist',compact('post','blog_cat','post_list'));
    }

public function postdetails(Request $req ,$post_id)
{
  $post_id = $req->post_id;
  $post_details = Blog::find($post_id);

  return view('frontend/postdetails',compact('post_details'));


}

    public function blogdetails($blog_id)
    {
      $blog_details = Blog::find($blog_id);
      $blog_cat = Blog_Category::all();
      $blog_list = Blog::take(5)->get();
      $blog_count = Blog::count();
      // $blog_count = Blog::where('cat_id',$blog_cat)->count();
      return view('frontend/blogdetails',compact('blog_details','blog_cat','blog_list','blog_count'));

    }
    public function details(Request $req ,$blog_id)
    {
      $cat_id =$req->blog_id;
      // return $cat_id;
      // $blog_list= Blog_Category::find($cat_id);
      $blog_cat = Blog_Category::all();

      $blog_count = Blog::where('cat_id',$cat_id)->get();
      // dd($blog_count);

      // $blog_count = Blog::count($blog_count);


      return view('frontend/details',compact('blog_count','blog_cat'));

    }

}
