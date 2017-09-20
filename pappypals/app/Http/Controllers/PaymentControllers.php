<?php
namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Exception;
use Carbon;
use Session;
 
/**
* Homecontroller
*/
class PaymentControllers extends Controller
{
 
	protected $user;  
	public function __construct()
	{
	    $this->user = Auth::user();
	}
	public function getAccounts()
	{
//        $loginTime =  new Carbon(Session::get('LoginTime'));
//        $diff = $loginTime->diffInMinutes(Carbon::now());
        //after 15 minutes a password security check will be ask.
        //TO DO move settings to a model/ migration to have it centriliced?
//        if($diff > 15)
//        {
//             return redirect('SecurityCheck');
//        }
        
                 dd(Auth::check());
         
	   	if(Auth::check() && $this->user->subscribed()){
       
               $data = array(
			'user'  =>$this->user,
			'users'   => $this->user->users(),
            'invoices' => $this->user->invoices()
			);
            //if(session('auth') ==1)
            //{
			return view('pages.payment.account')->with('data', $data);
            //}else{
            //$messages =array(
            //'1'  =>''
            //);
            //return view('Auth.SecurityCheck')->with('messages', $messages);
            //}
	   	}else{
	   		return view('pages.payment.join')->with('user', $this->user);
	   	}
	}
	public function getprofile()
	{
     	   	if(Auth::check() && $this->user->subscribed()){
               
            
               
               
               $data = array(
		    'user'  =>$this->user,
		    'users'   => $this->user->users()
		);
               
	   		return view('Admin.profile')->with('data', $data);
	   	}else{
	   		return view('pages.payment.join')->with('user', $this->user);
	   	}
	}
	
	public function postjoin(Request $request)
	{
		$input = $request->all();
		$token = $input['stripeToken'];
		try {
            //add card to user
		    $this->user->subscription($input['plane'])->withCoupon($input['coupon'])->create($token,[
		            'email' => $this->user->email
		    ]);
            return redirect('subusers')->with('info','Subscription is completed.');
		} catch (Exception $e) {
		    return back()->with('info',$e->getMessage());
		}
	}
	public function canceljoin()
	{
		$this->user->subscription()->cancel();
		return back()->with('info','Subscription is now unsubscribed.');
	}
	public function upgrade()
	{
        $this->user->subscription('test')->swap();
		return back()->with('info','Subscription is now upgraded.');
	}
}
