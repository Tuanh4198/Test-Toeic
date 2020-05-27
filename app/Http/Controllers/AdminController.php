<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
    	return view('admin_login');
    }

    public function authlogin(){        
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function show_dashboard(){
        // $this->authlogin();
    	return view('admin.dashboard');
    }

    public function dashboard(Request $request){
    	return Redirect::to('/dashboard');
    }


}
