<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use App\OrderProductRequest;
use App\User;
use App\OrderFormImage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;
use Auth;

use Illuminate\Support\Facades\Crypt;

// use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
	public function index(Request $request){
		// dd("hh");

		// return view('frontend.home');	
		return view('welcome');	
	}

	public function login(Request $request){
		// dd(Hash::make("123456"));
		// dd("hh");
        if($request->isMethod('post')){
			$data=$request->all();

			if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)){ //email
				$any = array('email'=>$data['email'],'password'=>$data['password']);
			}else{
				$any = array('mobile_number'=>$data['email'],'password'=>$data['password']);
			}

			
			if(auth()->attempt($any)){
			    //$user =  DB::table('users')->where('id',auth()->user()->id)->first();
			   //dd("sdsd");
			     // dd("success");
			     return redirect('/dashboard');
			}else{
			 Session::flash('flash_error', 'Email or Password is incorrect'); 
			   return Redirect('login');
			}
        }

      if(Auth::check()){
      	return redirect('/dashboard');
      }

		return view('frontend.login');	
	}

	public function signup(Request $request){
		// dd("hh");
		if($request->isMethod('post')){
			$data = $request->all();

			$user = new User();

			$user->name = $data['name'];
			$user->username = $data['username'];
			$user->title = $data['title'];
			$user->prefix = $data['prefix'];
			$user->surname = $data['surname'];
			$user->email = $data['email'];
			$user->mobile_number = $data['mobile_number'];
			// $user->sms = $data['sms'];
			$user->country_id = $data['country'];
			$user->addition = $data['addition'];
			$user->postal_code  = @$data['postal_code'];
			$user->number  = @$data['number'];
			$user->address = $data['address'];
			$user->city = $data['city'];
			$user->user_type  = $data['user_type'];
			$user->password  = str_replace("$2y$","$2a$", Hash::make($data['password']));
   $user->save();
   Session::flash('flash_success',"Signup Successfully. Please login to continue");
			return response()->json([
       "status" => true
			]);
		}
		$countries = Country::get();
		return view('frontend.signup',compact("countries"));	
	}

	public function signupBusiness(Request $request){
		// dd("hh");
		if($request->isMethod('post')){
			$data = $request->all();
			
			$user = new User();

			$user->name = $data['name'];
			$user->username = $data['username'];
			$user->title = $data['title'];
			$user->prefix = $data['prefix'];
			$user->surname = $data['surname'];
			$user->email = $data['email'];
			$user->mobile_number = $data['mobile_number'];
			// $user->sms = $data['sms'];
			$user->country_id = $data['country'];
			$user->addition = $data['addition'];
			$user->address = $data['address'];
			$user->city = $data['city'];
			$user->user_type  = $data['user_type'];
			$user->password  = str_replace("$2y$","$2a$", Hash::make($data['password']));
			$user->chamber  = $data['chamber'];
			$user->number  = @$data['number'];
			$user->company  = $data['company_name'];
			$user->postal_code  = @$data['postal_code'];
			$user->vat_number  = $data['vat_number'];
			$user->european  = $data['from_european'];
			$user->company_country  = $data['company_country'];
   $user->save();
   Session::flash('flash_success',"Signup Successfully. Please login to continue");

   // dd($data);
			return response()->json([
       "status" => true
			]);
		}
		$countries = Country::get();
		return view('frontend.signup',compact("countries"));	
	}

	public function emailCheck(Request $request){
		$data = $request->all();
		$user = User::where('email',$data['email'])->first();

		return response()->json([
			"valid" => $user ? false : true,
		]);
			dd($data);
	}

	public function userNameCheck(Request $request){
		$data = $request->all();
		$user = User::where('username',$data['username'])->first();

		return response()->json([
			"valid" => $user ? false : true,
		]);
			dd($data);
	}

	public function sendOTP(Request $request){
		$data = $request->all();
		if($data['type'] == "send"){

			$otp = rand(1000,9999);

			$params = ["username" => "tessema",
			"userid" => "20263",
			"handle" => "7e861317e4359f6c004ae6ddbd032b8f",
			"msg" => "You OTP is : ".$otp,
			"from" => "BudgetSMS",
			"to" => $data['number']];

			$cURLConnection = curl_init();

			curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.budgetsms.net/sendsms/?'.http_build_query($params));
			curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

			$phoneList = curl_exec($cURLConnection);
			curl_close($cURLConnection);

			$jsonArrayResponse = json_decode($phoneList);
			//dd($jsonArrayResponse);

			$string_to_encrypt = $otp;
			$password = env('OPEN_SSL_PASSWORD');
			$encrypted_string=openssl_encrypt($string_to_encrypt,"AES-128-ECB",$password);
   return response()->json([
       "status" => true,
       "rt" => $encrypted_string,
			]);
		}else if ($data['type'] == "verify") {
			# code...
			$password = env('OPEN_SSL_PASSWORD');
			$decrypted_string=openssl_decrypt($data['rt'],"AES-128-ECB",$password);

	//		dd($decrypted_string);
			//dd($data);
			$enterdOTp = $data['field-1'].$data['field-2'].$data['field-4'].$data['field-5'];
			
			if($decrypted_string && $enterdOTp == $decrypted_string){
				
				return response()->json([
	       "status" => true,
				]);
			}else{
				
				return response()->json([
	       "status" => false,
				]);
			}
			
		}
	}

	public function dashboard(Request $request){
		$countries = Country::get();
		return view('frontend.dashboard',compact("countries"));
	}

	public function logout(){
		Auth::logout();

		return redirect('/login');
	}

	public function orderList(Request $request){

		$list = OrderProductRequest::orderBy("id","DESC")->where("user_id",Auth::user()->id)->with("images")->paginate(10);

		return view("frontend.order-list",compact("list"));
	}

	public function addOrder(Request $request){
		$data = $request->all();
		/*if($request->ajax()){			
			if($request->hasFile('file_data')){
				// uploading logo
				$file=$request->file('file_data');
	   $ext=$file->getClientOriginalExtension();
	   $name=$file->getClientOriginalName();
	   $path='public/imgs/order-product';
	   $img=time().'-'.$name.'.'.$ext;
	   $file->move($path,$img);
	   

	   return response()->json(true);
				//end
			}
		}*/

		if(!$request->ajax() && $request->isMethod("post")){
			//dd(OrderFormImage::first());
			//dd($data);
			$obj = new OrderProductRequest;

			$obj->product_name     = $data['product_name'];
			$obj->product_sub_name = $data['product_sub_name'];
			$obj->model_number = $data['model_number'];
			$obj->brand_name = $data['brand_name'];
			$obj->color = $data['color'];
			$obj->quantity = $data['quantity'];
			$obj->description = $data['description'];
			$obj->user_id = Auth::user()->id;
			$obj->save();

			if($data['product_images']){
				$arr = json_decode($data['product_images']);
				foreach ($arr as $key => $value) {
					$img = new OrderFormImage;

					$img->image = $value;
					$img->order_id = $obj->id;
					$img->save();
				}
			}
			// dd($data);

			return redirect('order-list')->with("flash_success","Order added Successfully.");
			//dd($data);
		}

		return view("frontend.add-order");
	}

	public function orderImage(Request $request){
		// dd($request->all());
		if($request->hasFile('orderImages')){
			// uploading logo
			$imgg = [];
			foreach ($request->file('orderImages') as $key => $value) {
				$file=$value;

	   $ext=$file->getClientOriginalExtension();
	   $name=$file->getClientOriginalName();
	   $path='public/imgs/order-product';
	   $img=time().'-'.$name;
	   array_push($imgg, $img);
	   $file->move($path,$img);
			}
				
   

   return response()->json($imgg);
			//end
		}
		
	}

	public function orderDetails(Request $request,$order_id){

		$details = OrderProductRequest::with("images")->find(Crypt::decryptString($order_id));
		if(!$details){
			// redirect back //order not exist
			return redirect()->back();
		}


		return view('frontend.order-detail-form',compact("details"));

	}	

	public function forgotPassword(Request $request){

		$data = $request->all();
		$randomNumber = rand(100026662,1165165165);

		$user = User::where('email',$data['email'])->first();
		$user->verification_code = $randomNumber;
		$user->save();

		$password = env('OPEN_SSL_PASSWORD');
		// dd($password);
		$encrypted_string = openssl_encrypt($randomNumber,"AES-128-ECB",$password);
		// $decrypted_string=openssl_decrypt($data['rt'],"AES-128-ECB",$password);
		$password = '';
		$email = $user->email;
		$subject = "Forgot Password";
        $links = array();
        $links['name']=$user->name;
        $links['link'] = url('change-password?code='.$encrypted_string."&q=".Crypt::encryptString($user->id));

        Mail::send('emails.forgot_password', $links, function($message) use ($email,$subject){
		   // dd('hello');
		   $message->to($email)->subject($subject);
		});

        return redirect()->back()->with('flash_success','Please check your email for change password.');
		// dd("success");

	}

	public function changePassword(Request $request){
		$data = $request->all();

		if($request->isMethod('post')){
			$data = $request->all();

			if(openssl_decrypt($data['code'],"AES-128-ECB",env('OPEN_SSL_PASSWORD'))){
				$code = openssl_decrypt($data['code'],"AES-128-ECB",env('OPEN_SSL_PASSWORD'));
				$user = User::where('id',Crypt::decryptString($data['q']))->first();
				if($user->verification_code){
					$user->password = str_replace("$2y$","$2a$", Hash::make($data['password']));
					$user->verification_code = null;
					$user->save();

					return redirect('/login')->with('flash_success',"Password has been changed. Please login to continue");
				}else{
					return redirect()->away(url('/'))->with('flash_error',"Link has been expired.");
				}

			}else{
				return redirect()->away(url('/'))->with('flash_error',"Verification code is not valid");
			}

			dd($data);
		}


		if(openssl_decrypt($data['code'],"AES-128-ECB",env('OPEN_SSL_PASSWORD'))){
			$code = openssl_decrypt($data['code'],"AES-128-ECB",env('OPEN_SSL_PASSWORD'));
			$user = User::where('id',Crypt::decryptString($data['q']))->first();
			if($user->verification_code){
				return view('frontend.change-password');
			}else{
				return redirect()->away(url('/'))->with('flash_error',"Link has been expired.");
			}

		}else{
			return redirect()->away(url('/'))->with('flash_error',"Verification code is not valid");
		}

		
	}

	public function checkEmailsExist(Request $request){

		$data = $request->all();
		$user = User::where('email',$data['email'])->first();
		if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
			if($user){
				return response()->json([
					"valid" => true
				]);
			}else{
				return response()->json([
					"valid" => false
				]);
			}
		}else{
			return response()->json([
				"valid" => true
			]);
		}
		dd($data);

	}

	public function changePasswordDashboard(Request $request){
		if($request->isMethod('post')){
			$data = $request->all();
			$user = User::where('id',Auth::user()->id)->first();
			if(Hash::check($data['old_password'], $user->password))
			{
				$user->password = str_replace("$2y$","$2a$", Hash::make($data['password']));
				$user->verification_code = null;
				$user->save();

				return redirect()->back()->with('flash_success','Password has been changed.');
			}else{
				return redirect()->back()->with('flash_error','Current password is wrong. Please check and try again');
			}
			dd($data);
		}

		return view('frontend.change-password-dashboard');
	}

	public function myWon(Request $request){
		return view('frontend.my_won');
	}

	public function myInvoice(Request $request){
		return view('frontend.my_invoice');
	}

	public function myLots(Request $request){
		return view('frontend.my_lots');
	}

	public function outBid(Request $request){
		// dd();
		return view('frontend.out_bid');
	}

	public function favoritesBid(Request $request){
		return view('frontend.favorite_bid');
	}
    
}
