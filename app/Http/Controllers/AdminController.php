<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('project/admin/index');
    }
     public function viewAllmembers()
    {
        return view('project/admin/allMembers');
    }
     public function allMembers()
    {
      
        return User::all();
    }

     public function editStatus($id){

 $update =User::find($id);
 User::where('id',$id)->update(['status'=>1]);
 return  $update;
}
 public function cancleMember($id){

 $update =User::find($id);
 User::where('id',$id)->update(['status'=>0]);
 return  $update;
}
}
