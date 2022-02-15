<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Carbon\carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('admin/admin_home');
    // }

    
      public function add_data()
    {
        return view('add_data');
    }
    public function data_process(Request $req)
    {
        //  $user_name = $req->user_name;
        //  $user_addrs = $req->user_addrs;
        $rules = [
            'user_name'=> 'required|max:10',
            'user_addrs'=> 'required',

        ];
        $cm = [
            'user_name.required' => 'Enter Student Name',
            'user_name.max' => 'Student Name Containt Must Be 10 CH',
            'user_addrs.required' => 'Enter Student Address',
            // 'user_addrs.email' => 'Enter Student Address Valid Email',

        ];
        $this->validate($req,$rules,$cm);
        // return $req->all();
         Student::insert([
         'name' => $req->user_name,
         'address' => $req->user_addrs,
         'created_at' =>carbon::now()

       ]);

    //    return back()->with('success','Data Inserted...!!');
       return redirect('data_show');
    }
    public function data_show()
    {
       $std_list = Student::all();
       return view('data_show',compact('std_list'));
    }
    public function delete_data($delete_id)
    {
        Student::where('id',$delete_id)->delete();
        // $delete_id = Student::find($delete_id);
        // $delete_id->delete();
        return redirect('data_show');
    }

    public function editstd($std_id)
    { 
        $std_list = Student::find($std_id);
        // return view('edit_std',compact('std_list'));
        return view('edit_std',compact('std_list'));

    }

    public function edit_process(Request $req)
    {

        $edit_id = $req->edit_id; 
         Student::where('id',$edit_id)->update([
         'name' => $req->user_name,
         'address' => $req->user_addrs,
         'updated_at' =>carbon::now()

       ]);
       return redirect('data_show');

    }

    public function adssssmin()
    {
      
       return view('admin/index');

    }

    
    public function studentList()
    {
       $std_list = Student::all();
       return view('admin/student_list',compact('std_list'));

    }
}
