<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\str_slug();
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\About;
use App\Models\About_skill;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\Blog_Category;
use App\Models\Portfolio;
use App\Models\Portfolio_Category;
use App\Models\Client_review;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\User;

use Carbon\carbon;
use Auth;
use Hash;
use File;

class AdminController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
    {
        return view('admin/login');
    }

    public function home()
    {


        return view('admin/admin_home');

    }



    public function aboutlist()
    {

       $about_list = About::all();
        return view('admin/aboutlist',compact('about_list'));

    }

    public function about()
    {


        return view('admin/about');

    }


    public function about_process(Request $req)
    {

        About::insert([
            'message' => $req->about_desc
        ]);
        return back();

    }


    public function aboutskill()
    {

       $about_skill = About_skill::all();
         return view('admin/about/aboutskill',compact('about_skill'));

    }


    public function add_skill()
    {


         return view('admin/about/add_skill');

    }


    public function skillinsert(Request $req)
    {


       About_skill::insert([
           'skill_name'=>$req->skill_name,
           'skill_complate'=>$req->skill_complate,
           'created_at'=>Carbon::now()
       ]);
         return redirect('admin/about/aboutskill');

    }


    public function delete_skill($skill_id)
    {
        $skill_id = About_skill::find($skill_id);
        $skill_id->delete();
         return redirect('admin/about/aboutskill');

    }

     public function edit_skill($skill_id)
    {
        $skill_list = About_skill::find($skill_id);

         return view('admin/about/edit_skill',compact('skill_list'));

    }


public function skillupdate(Request $req)
    {
        $edit_id = $req->skill_id;

        $skill_list = About_skill::where('id',$edit_id)->update([
            'skill_name'=>$req->skill_name,
            'skill_complate'=>$req->skill_complate,
            'updated_at'=>Carbon::now()
        ]);

         return redirect('admin/about/aboutskill');

    }

    //Service Start

    //all service
    public function servicelist()
    {
        $service_list = Service::all();
        return view('admin/service/servicelist',compact('service_list'));

    }

    //add service
    public function add_service()
    {

         return view('admin/service/add_service');

    }
    //add service
    public function service_insert(Request $req)
    {

         if($req->hasFile('service_picture')){

            $img = $req->file('service_picture');
            $extension = $img->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $img->move('storage/service/',$filename);
            // $imgfile ='service/'.$filename;
        //   $path = $req->file('service_picture')->store('/product');
            Service::insert([
            'service_name' => $req->service_name,
            'service_description' => $req->service_desc,
             'service_picture' => $filename,
            'created_at' =>Carbon::now()

        ]);
        //    $post->save();
         }

    else{

        $post = Service::insert([
            'service_name' => $req->service_name,
            'service_description' => $req->service_desc,
            'created_at' =>Carbon::now()

        ]);
    }




         return redirect('admin/service/servicelist');

    }

    //delete service
    public function delete_service($service_id)
    {

        $service_id = Service::find($service_id);
          $destanation ='storage/service/'.$service_id->service_picture;
            // $img->move('storage/service/',$service_id);
         if (File::exists($destanation)) {
             File::delete($destanation);
         }
        $service_id->delete();
         return redirect('admin/service/servicelist');

    }

    //edit service
    public function edit_service($service_id)
    {
        $service_list = Service::find($service_id);
        return view('admin/service/edit_service',compact('service_list'));

    }

    //Update Service
    public function update_service(Request $req)
    {
        $service = $req->service_id;
        // $service_id = Service::find($service_id);

        if($req->hasFile('service_picture')){

        //update and delete img

         $service_id = Service::find($service);
         $destanation ='storage/service/'.$service_id->service_picture;
            // $img->move('storage/service/',$service_id);
         if (File::exists($destanation)) {
             File::delete($destanation);
         }


            $img = $req->file('service_picture');
            $extension = $img->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $img->move('storage/service/',$filename);

             service::where('id',$service)->update([
             'service_name' => $req->service_name,
             'service_description' => $req->service_desc,
             'service_picture' => $filename,
             'updated_at' => Carbon::now()

            ]);



        //    $post->save();
         }

         else{
             service::where('id',$service)->update([
             'service_name' => $req->service_name,
             'service_description' => $req->service_desc,
             'updated_at' => Carbon::now()

            ]);
         }
         return redirect('admin/service/servicelist');


    }

    //Service End

  public function categorylist()
    {
      $category = Portfolio_Category::all();
      return view('admin/portfolio/categorylist',compact('category'));

    }

    public function addcategory()
    {
      return view('admin/portfolio/add_category');

      //

    }

public function categoryprocess(Request $req)
{
  Portfolio_Category::insert([
    'category_name' => $req->category_name,
    'created_at' => Carbon::now()
  ]);
  return back();
}

public function delete_category($category_id)
{
  $cat_id = Portfolio_Category::find($category_id);
  // Portfolio_Category::where('id',$cat_id)->delete();
  $cat_id->delete();
  return redirect('admin/portfolio/categorylist');
  //
  // $skill_id = About_skill::find($skill_id);
  // $skill_id->delete();
  //  return redirect('admin/about/aboutskill');

}
public function edit_category($category_id)
{
  $category = Portfolio_Category::find($category_id);
  return view('admin/portfolio/edit_category',compact('category'));
}
public function updatecategory(Request $req)
{
  $cat_id = $req->category_id;

  Portfolio_Category::where('id',$cat_id)->update([
    'category_name' => $req->category_name,
    'updated_at' => Carbon::now()
  ]);
return redirect('admin/portfolio/categorylist');
}

public function portfolio()
{
  $portfoliolist = Portfolio::all();

  return view('admin/portfolio/portfoliolist',compact('portfoliolist'));
}
public function add_portfolio()
{
  $portfoliocate = Portfolio_Category::all();

  return view('admin/portfolio/add_portfolio',compact('portfoliocate'));
}
public function portfolioprocess(Request $req)
{
  if($req->hasFile('portfolio_picture')){

           $img = $req->file('portfolio_picture');
           $extension = $img->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $img->move('storage/portfolio/',$filename);

        Portfolio::insert([
          'category_id' => $req->cat_id,
          'portfolio_name' => $req->portfolio_name,
          'portfolio_description' => $req->portfolio_desc,
          'portfolio_picture' => $filename,
          'created_at' => Carbon::now()
        ]);
        return redirect('admin/portfolio/portfolio');

    }

    else{
//$img = $req->file('portfolio_picture');
      // $extension = $img->getClientOriginalExtension();
//$filename = 'default.jpg';
//$img->move('storage/portfolio/',$filename);
    Portfolio::insert([
     'category_id' => $req->cat_id,
     'portfolio_name' => $req->portfolio_name,
     'portfolio_description' => $req->portfolio_desc,
     'portfolio_picture' => 'default.jpg',
     'created_at' => Carbon::now()
    ]);
    return redirect('admin/portfolio/portfolio');

    }
}
public function delete_portfolio($portfolio_id)
{
  $cat_id = Portfolio::find($portfolio_id);
    $destanation ='storage/portfolio/'.$cat_id->portfolio_picture;
      // $img->move('storage/service/',$service_id);
   if (File::exists($destanation)) {
       File::delete($destanation);
   }
   $cat_id->delete();

  return redirect('admin/portfolio/portfolio');

}

public function edit_portfolio($portfolio_id)
{
  $portfoliolist = Portfolio::find($portfolio_id);
  $portfoliocate = Portfolio_Category::all();
  return view('admin/portfolio/edit_portfolio',compact('portfoliolist','portfoliocate'));
}


    public function updateportfolio(Request $req)
    {
      $cat_id = $req->cat_id;
      $portfolio_id = $req->portfolio_id;

      if($req->hasFile('portfolio_picture')){

      //update and delete img

       $port_id = Portfolio::find($portfolio_id);
       $destanation ='storage/portfolio/'.$port_id->portfolio_picture;
          // $img->move('storage/service/',$service_id);
       if (File::exists($destanation)) {
           File::delete($destanation);
       }

          $img = $req->file('portfolio_picture');
          $extension = $img->getClientOriginalExtension();
          $filename = time().'.'.$extension;
          $img->move('storage/portfolio/',$filename);

         Portfolio::where('id',$portfolio_id)->update([
           'category_id' => $req->cat_id,
           'portfolio_name' => $req->portfolio_name,
           'portfolio_description' => $req->portfolio_desc,
           'portfolio_picture' =>$filename,
            'updated_at' => Carbon::now()
         ]);



      //    $post->save();
       }
       else{
         Portfolio::where('id',$portfolio_id)->update([
           'category_id' => $req->cat_id,
           'portfolio_name' => $req->portfolio_name,
           'portfolio_description' => $req->portfolio_desc,
           // 'portfolio_picture' => $filename,
            'updated_at' => Carbon::now()
          ]);
       }
      return redirect('admin/portfolio/portfolio');


    }


    public function addtag()
    {
      return view('admin/tag/add_tag');
    }
    public function taginsert(Request $req)
    {
      Tag::insert([
        'name' => $req->tag_name,
        'slug' => Str::slug($req->tag_name),
        'description' => $req->tag_desc,

      ]);
      return back();
    }
    public function inserttag(Request $req)
    {

    }
    public function showtag()
    {
      $taglist = Tag::all();
      return view('admin/tag/tag_list',compact('taglist'));
    }
    public function tagedit($tag_id)
    {

        $taglist = Tag::find($tag_id);
        return view('admin/tag/edit_tag',compact('taglist'));
    }
    public function updatetag(Request $req)
    {
      $tagid = $req->tag_id;
      Tag::where('id',$tagid)->update([
        'name' => $req->tag_name,
        'slug' => Str::slug($req->tag_name),
        'description' => $req->tag_desc,
      ]);

      return redirect('admin/tag/taglist');
    }
    public function distroytag($tag_id)
    {
      $tag = Tag::find($tag_id);
      $tag->delete();
      return back();
    }

    public function blogcatlist()
    {
      $blogcatlist = Blog_Category::all();
      return view('admin/blog/categorylist',compact('blogcatlist'));
    }
    public function blogcategoryinsert(Request $req)
    {
      return view('admin/blog/add_category');

    }
    public function blogcategoryprocess(Request $req)
    {
      Blog_Category::insert([
        'category_name' => $req->category_name,
        'created_at' => Carbon::now()
      ]);
      return redirect('admin/blog/categorylist');

    }
    public function blogcategoryedit($blog_cat_id)
    {
      $blog_category = Blog_Category::find($blog_cat_id);
      return view('admin/blog/edit_category',compact('blog_category'));


    }
    public function blogcategoryupdate(Request $req)
    {
      $blog_id = $req->blog_id;
      Blog_Category::Where('id',$blog_id)->update([
        'category_name' => $req->category_name,
        'updated_at' => Carbon::now()
      ]);

      return redirect('admin/blog/categorylist');

    }
    public function blogcategorydelete($blog_cat_id)
    {
      $blog_id = Blog_Category::find($blog_cat_id);
      $blog_id->delete();
      return redirect('admin/blog/categorylist');

    }
public function bloglist()
{
  $bloglist = Blog::all();
  return view('admin/blog/bloglist',compact('bloglist'));
}

public function bloginsert()
{
  $blogcatlist = Blog_Category::all();

  return view('admin/blog/add_blog',compact('blogcatlist'));

}

public function blogprocess(Request $req)
{

  if($req->hasFile('blog_picture')){

           $img = $req->file('blog_picture');
           $extension = $img->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $img->move('storage/blog/',$filename);

           Blog::insert([
             'cat_id' => $req->cat_id,
             'blog_name' => $req->blog_name,
             'blog_slug' => Str::slug($req->blog_name),
             'blog_message' => $req->blog_desc,
             'blog_picture' => $filename,
             'user_name' => 'emon',
             'created_at' => Carbon::now(),
           ]);
           return redirect('admin/blog/bloglist');

    }

    else{

      Blog::insert([
        'cat_id' => $req->cat_id,
        'blog_name' => $req->blog_name,
        'blog_slug' => Str::slug($req->blog_name),
        'blog_message' => $req->blog_desc,
        'blog_picture' => 'default.jpg',
        'created_at' => Carbon::now()

      ]);
      return redirect('admin/blog/bloglist');

    }

}
public function blogedit($blog_id)
{
  $bloglist = Blog::find($blog_id);
  $blogcatlist = Blog_Category::all();
  return view('admin/blog/edit_blog',compact('bloglist','blogcatlist'));
}
public function blogupdate(Request $req)
{

$cat_id = $req->cat_id;
// $portfolio_id = $req->portfolio_id;
$blog_id = $req->blog_id;

if($req->hasFile('blog_picture')){

//update and delete img

 $port_id = Blog::find($blog_id);
 $destanation ='storage/blog/'.$port_id->blog_picture;
    // $img->move('storage/service/',$service_id);
 if (File::exists($destanation)) {
     File::delete($destanation);
 }

    $img = $req->file('blog_picture');
    $extension = $img->getClientOriginalExtension();
    $filename = time().'.'.$extension;
    $img->move('storage/blog/',$filename);

   Blog::where('id',$blog_id)->update([
     'cat_id' => $req->cat_id,
     'blog_name' => $req->blog_name,
     'blog_message' => $req->blog_desc,
     'blog_picture' => $filename,
      'updated_at' => Carbon::now()
   ]);

 }
 else{
   Blog::where('id',$blog_id)->update([
     'cat_id' => $req->cat_id,
     'blog_name' => $req->blog_name,
     'blog_message' => $req->blog_desc,
      'updated_at' => Carbon::now()
    ]);
 }
  return redirect('admin/blog/bloglist');

}

public function blogdelete($blog_id)
{
  $blog_id = Blog::find($blog_id);
  $destanation ='storage/blog/'.$blog_id->blog_picture;
    // $img->move('storage/service/',$service_id);
 if (File::exists($destanation)) {
     File::delete($destanation);
 }
  $blog_id->delete();

  return redirect('admin/blog/bloglist');

}

// =======================  Menu Route List  ============================ //
public function menulist()
{
  $menulist = Menu::all();
  return view('admin/menu/menulist',compact('menulist'));
}
public function menuinsert()
{
  return view('admin/menu/add_menu');

}
public function menuprocess(Request $req)
{
  Menu::insert([
    'menu_name' => $req->menu_name,
    'menu_url' => $req->menu_url,
    'created_at' => Carbon::now()
  ]);
  return redirect('admin/menu/menulist');
}
public function menuedit($menu_id)
{
  $menu_list = Menu::find($menu_id);
  return view('admin/menu/edit_menu',compact('menu_list'));

}
public function menuupdate(Request $req)
{
  $menu_id = $req->menu_id;
  Menu::where('id',$menu_id)->update([
    'menu_name' => $req->menu_name,
    'menu_url' => $req->menu_url,
    'updated_at' => Carbon::now()
  ]);
  return redirect('admin/menu/menulist');

}
public function menudelete($menu_id)
{
  $menu_id = Menu::find($menu_id);
  $menu_id->delete();
  return redirect('admin/menu/menulist');

}


    //Contact Route Start
    public function contactlist()
    {   $contactlist = Contact::all();
        return view('admin/contact/contactlist',compact('contactlist'));
    }
    //Contact Route End

}
