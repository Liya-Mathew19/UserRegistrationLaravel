<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function editprofile(Request $request,$id)
    {
        $username=$request->input('username');
        $email=$request->input('email');
        $dob=$request->input('dob');
        $city=$request->input('city');

        DB::table('users')->where([['id',"=",$id ]])->update(['username' => $username]);
        DB::table('user_details')->where([['fk_user_id',"=",$id]])->update(['email' => $email,
        'dob' => $dob, 'city' => $city]);
        return redirect()->back()->withSuccess('Data Updated !!');
    }
}
