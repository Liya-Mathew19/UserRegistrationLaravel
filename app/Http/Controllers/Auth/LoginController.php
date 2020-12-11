<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use Session;
use Hash;
use DB;
use Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }  
 
    public function register()
    {
        return view('register');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
          $userStatus = Auth::User()->status;
          if($userStatus=='Verified') {
            // Authentication passed...
            return redirect()->intended('dashboard');
          }
          else{
            Auth::logout();
            Session::flush();
            return redirect(url('login'))->withInput()->with('error','You are not a verified user !!');
        }
        }
        else
      {
        return Redirect::to("login")->withError('Opps! You have entered invalid credentials');
      }
    }
     
    public function dashboard()
    {
      $users = DB::table('users')
            ->join('user_details', 'users.id', '=', 'user_details.fk_user_id')
            ->select('users.*', 'user_details.*')
            ->where('user_details.fk_user_id','=',Auth::user()->id)
            ->first();
            //dd($users);

      if(Auth::check()){
        return view('dashboard',compact('users'));
      }
       return Redirect::to("login")->withError('Opps! You do not have access');
    }
 
    public function postRegister(Request $request)
    {
      $this->validate($request,[
        'username' =>'required|min:3|max:20|unique:users',
        'email' =>'required|email|unique:user_details',
        'password' => 'required|min:3|max:20|confirmed',
    ]);

   

        DB::beginTransaction();
        $user=new User();
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        //$user->confirm_password=Hash::make($request->input('password_confirmation'));    
        $user->status = 'Progress';
        $user->save();

        $userdetails=new UserDetails();
        $userdetails->fk_user_id=$user->id;
        $userdetails->email = $request->input('email');
        $userdetails->dob = $request->input('dob');
        $userdetails->city = $request->input('city');
        $userdetails->status = 'Progress';
        $userdetails->save();
        DB::commit();

        return \Redirect::route('resendemailOtp', $user->id)->with('message', 'State saved correctly!!!');

        
      
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
