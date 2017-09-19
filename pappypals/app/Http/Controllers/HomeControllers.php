<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

/**
* Homecontroller
*/
class HomeControllers extends Controller
{

  public function home()
  {
    if(Auth::user())
    {
      $subusers =  Auth::user()->users();
      return view('SubUsers.show', ['subusers' => $subusers]);
    }else{
      return view('Auth.signin');
    }  
  }

  public function getmodule()
  {
    return view('pages.Account.module');
  }
  public function getcontact()
  {
    return view('pages.Account.contact');
  }
  public function getfaq()
  {
    return view('pages.Account.faq');
  }
  public function getplayTogether()
  {
    return view('pages.Account.playTogether');
  }
  public function getactivities()
  {
    return view('pages.Account.activities');
  }
  public function getarticles()
  {
    return view('pages.Account.articles');
  }
  public function getvideos()
  {
    return view('pages.Account.videos');
  }
  public function getEQ()
  {
    return view('pages.Account.EQ');
  }
  public function getplayModule()
  {
    return view('pages.Account.playModule');
  }
}