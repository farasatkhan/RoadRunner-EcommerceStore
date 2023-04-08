<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Session;

class UserController extends Controller
{
    public function showSignupPage(){
        if(Session::has('privilege')){
            return redirect('/items');
        }
        return view('/signup');
    }

    public function showLoginPage(){
        if(Session::has('privilege')){
            return redirect('/items');
        }
        return view('/login');
    }

    public function showProfilePage(){
        if(Session::has('privilege') && Session::get('privilege') == 'user'){
            $user = User::where('user_id',Session::get('id'))->first();

            return view('/viewProfile',['user'=>$user]);
        }
        return redirect('/login');
    }

    public function showEditpassword(){
        if(Session::has('privilege') && Session::get('privilege') == 'user'){
            return view('/editPassword',['saved'=>NULL]);
        }
        return redirect('/login');
    }

    public function updatePassword(Request $request){
        if(Session::has('privilege') && Session::get('privilege') == 'user'){
            if(strcmp($request->input('Old Password'),Session::get('password'))==0){
        
                DB::raw('update `users` set `user_password` = '.$request->input('password').' where `id` is '.Session::get('id'));
                $user = User::where('user_id',Session::get('id'))->first();
                return redirect('/viewProfile')->with(['saved'=>TRUE,'user'=>$user]);
            }

            return redirect('/editPassword')->with(['saved'=>FALSE]);
        }
        return redirect('/login');
    }

    public function registerNewUser(Request $request) {
        
        $user = new User();

        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $name = $fname." ".$lname;

        $user->user_name = $name;
        $user->user_email = $request->input('email');
        $user->user_password = $request->input('password');
        $user->user_dob = $request->input('dob');
        $user->user_gender = $request->input('gender');
        $user->privilege = 'user';

        $user->save();

        return redirect('/login')->with('status', "Inserted Successfully");

        
    }

    public function loggedUser(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $usersData = DB::select('SELECT user_password,user_id,user_name FROM users where user_email = ?', [$email]);

        if (count($usersData) > 0){
            
            foreach ($usersData as $user) {

                if (($user->user_password) == $password){

                    $request->session()->put('privilege', 'user');
                    $request->session()->put('id', $user->user_id);
                    $request->session()->put('userName', $user->user_name);
                    $request->session()->put('password', $user->user_password);
                    return redirect('/items');
                }
            }
        }

        $error='Email or Password does not match';
        return view('/login',['error'=>$error]);
    }

    public function logoutUser(){
        if(Session::has('privilege') && Session::get('privilege') == 'user'){
            session()->forget('privilege');
        }
        return redirect('/login');
    }
}
