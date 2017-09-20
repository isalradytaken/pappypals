<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Logs;
use App\Models\Subuser;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Carbon;

use View;
use Session;
use Hash;
/**
* ADMIN CONTROLLERS
*/
class AuthControllers extends Controller
{
  /**
  * VIWE FUNCTION TO RIGESTER
  */
  public function getSignup()
  {
      if(Auth::check())
      {
          //redirect to index if already signed in
          return redirect()->route('/');
      }
    return view('Auth.signup');
  }

  public function getSignin()
  {
      if(Auth::check())
      {
      //redirect to index if already signed in
          return redirect()->route('/');
      }
    return view('Auth.signin');
  }
  public function getcreateAccount()
  {
    return view('Auth.create-account');
  }

  /**
  * INSERT FUNCTION TO RIGESTER 
  * AND VALIDATE ALLA THE DATA THAT COMES THROUGH
  */
  public function postSignup(Request $requsest)
  {
      $this->validate($requsest, [
          'email' => 'required|unique:users|email|max:255',
          'first_name' => 'required|alpha_dash|max:20',
          'last_name' => 'required|alpha_dash|max:20',
          'password' => 'required|min:5',
          'country' => 'required|alpha_dash|max:20',
      ]);
      

      User::create([
        'email' => $requsest->input('email'),
        'first_name' => $requsest->input('first_name'),
        'last_name' => $requsest->input('last_name'),
        'password' => bcrypt($requsest->input('password')),
         'country' => $requsest->input('country'),
          'state' => $requsest->input('state'),
      ]); 
      //check first login for securtity check avoidance
      Session::set('firstlogin', true);
      if(!Auth::attempt($requsest->only(['email', 'password'])))
      {
          return redirect()->back()->with('info', 'tagga');
      }
     Auth::user()->Log('Register');
      return redirect()->route('subscription')->with('info', 'logged in');
    
  }

  public function postSignin(Request $requsest)
  {
      $this->validate($requsest, [
          'email' => 'required',
          'password' => 'required',
      ]);
      Session::set('LoginTime', Carbon::now());
    //  $time =  Carbon::now();
      
      if(!Auth::attempt($requsest->only(['email', 'password'])))
      {
          return redirect()->back()->with('info', 'tagga');
      }
  //   return redirect()->route('subscription')->with('info', 'logged in');
     
     $subusers =  Auth::user()->users();
     Auth::user()->Log('Log In');
    
     if(Auth::user()->subscribed())
     {
         return View::make('SubUsers.show', ['subusers' => $subusers]);
     }else{
     	return view('pages.payment.join')->with('user',  Auth::user());
     }
    
  }
  public function postSignOut()
  {
     // $this->user-
   //   Auth::user()
     
      $this->AddLog('Log Out',Auth::User()->email,Auth::User()->id);
    Auth::logout();
  
    Session::flush();
    return redirect()->route('getsignin')->with('info', 'logged out');
  }
  
  /******
  *
  * SUBUSER OSÄKERT 
  *
  ******************************/ 

  public function postcreateAccount(Request $requsest)
  {
      $this->validate($requsest, [
          'username' => 'required|unique:subuser|alpha_dash|max:20',
          'age' => 'required',
          /*'grade' => '', */
      ]);
      
      Subuser::create([
        'username' => $requsest->input('username'),
        'age' => $requsest->input('age'),
       /* $grade = 12,
        'grade' => $grade,*/
        /*'password' => bcrypt($requsest->input('password')),*/    
         'user_id' =>   Auth::user()->getId(),
        
      ]); 
      return redirect('subusers');
  }
  
  
  
  public function postPassword(Request $requsest)
  {
     $user =  Auth::user();
     $user->password  = bcrypt($requsest->input('password'));
     $user ->save();
      return redirect('subusers');
  }

  public function getPassword()
  {
      return view('pages.payment.join');
  }

  public function getSecurtyCheck()
  {
      $messages =array(
'1'  =>''
);
      if(Session::get('firstlogin') ==true)
      {
         
          Session::set('firstlogin', false);
          return view('pages.payment.join')->with('user',  Auth::user());
          return redirect()->route('subscription')->with('info', 'logged in');
      }else{
          return view('Auth.SecurityCheck')->with('messages', $messages);
          
      }

     
  }
  public function postSecurtyCheck(Request $requsest)
  {
     
      if(Hash::check($requsest->input('password'),Auth::user()->password)) {
          $messages =array(
'1'  =>''
   );
          $data = array(
'user'  =>Auth::user(),
'users'   => Auth::user()->users()
);
          if(Auth::user()->subscribed())
          {
              return view('pages.payment.account')->with('data', $data);
          }else{
              return view('pages.payment.join')->with('user',  Auth::user());
          }
        
      } else {
$messages['1'] = 'Wrong Password';
          return view('Auth.SecurityCheck')->with('messages', $messages);
      }
    
   
  }
  public function AddLog($action,$email,$userid)
  {
      $this->Logs = new Logs();
      $this->Logs->action = $action;
      $this->Logs->user_id =$userid;
      $this->Logs->username =$email;
      $this->Logs->save();
      return null;
  }
}