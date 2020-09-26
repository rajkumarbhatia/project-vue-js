<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
class AdminController extends Controller
{
    public function dashboard(Request $request){
    	return view('backend.dashboard');
    }

    public function logout(){
        Auth::guard('admins')->logout();
        return Redirect('/admin/login');
    }

    public function login(Request $request){
    	if($request->isMethod('post')){
			$data = $request->all();
            $any = array('email'=>$data['email'],'password'=>$data['password']); 
            // dd($any);           
            if (Auth::guard('admins')->attempt($any))
            {
                // dd("ds");
	            Session::flash('flash_success','Logged In Successfully.');
                return Redirect('/admin/dashboard');
            }
            else
            {
            	Session::flash('flash_error','Username or Password is invalid');
                return Redirect('/admin/login');
            }
		}
        if(Auth::guard('admins')->check()){
            return Redirect('/admin/dashboard');
        }
        // dd(Auth::guard('admins')->user()->email);
    	return view('backend.login');
    }
}
