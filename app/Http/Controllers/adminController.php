<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\facades\Redirect;
class adminController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function show(){
        return view('admin.dashboard');
    }
    public function board(Request $r) {
        $username = $r->username;
        $password = md5($r->password);
        $result = DB::table('admins')
                    ->where('admin_name',$username)
                    ->where('password',$password)
                    ->first();
        if($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        } else {
            Session::put('messege', 'username or password invalid' );
            return Redirect::to('/login');
        }

    }
}
