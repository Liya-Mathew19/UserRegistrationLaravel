<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use App\Mail\MailController;
use Auth;
use DB;
use Mail;

class VerificationController extends Controller
{
    public function emailverification($id)
    {
        $userdetails=UserDetails::where('fk_user_id',$id)->first();
        return view('emailverification',compact('userdetails'));
    }
    //Generate random OTP

    public function generateOTP()
    {
        $otp = mt_rand(1000,9999);
        return $otp;
    }

      //Verifying OTP matches or not

    public function verifyemail(Request $request,$id)
    {
        $user_details=UserDetails::where('fk_user_id',$id)->first();
        $customer=User::all();
        $new_otp=request('otp');
        $view = User::where([['id',"=",$id ]])->get();
        foreach ($view as $user)
        {
            $OTP=$user->otp;
        }
       
            if($OTP == $new_otp)
            {
        
                DB::table('users')->where([['id',"=",$id ]])->update(['status' => "Verified"]);
               DB::table('user_details')->where([['fk_user_id',"=",$id]])->update(['status' => "Verified"]);
                return redirect('/login')->withSuccess('Email Verified!!Login Now..'); 
            }
            else
            {
                return redirect()->back()->with('error', 'OTP does not match!!'); 
            }
    }

        //Resend a new OTP when requested

    public function resendemailOtp(Request $request,$id)
    {
        $user=User::find($id);
        $userdetails=UserDetails::where('fk_user_id',$id)->first();
        $email=$userdetails->email;
        $view = UserDetails::where([['email',"=",$email ]])->get();
        $otp = $this->generateOTP();

        DB::table('users')->where([['id',"=",$id ],['status',"=" ,'Progress']])->update(['otp' => $otp]);
           
        foreach ($view as $user)
        {
            $user->email_otp=$otp;
            $status=$user->status;
        }
        if($status=="Progress"){
            
            DB::table('users')->where([['id',"=",$id ],['status',"=" ,$status]])->update(['otp' => $otp]);
            
            $data = array(
                'name'      =>  $user->username,
                'email' => $email,
                'otp'   =>   $otp
            );
    
         Mail::to($data['email'])->send(new MailController($data));

         return \Redirect::route('emailverification', $id)->with('success', 'An OTP has send to your mail successfully!!!');

             }
        else{
            return \Redirect::route('emailverification', $id)->with('error', 'OTP already verified!!');
           }
        
     }
}
