<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNonActiveRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

use DB;
use Illuminate\Support\Facades\Input;
use Validator;
class LoginController extends Controller {

    public function LoginPage()
    {
    	$errorMessage = ' ';
        return view('login',compact('errorMessage'));
    }

    public function LoginValidation(){

    	$errorMessage = ' ';
    	$validator = Validator::make(
    		Input::all(),
    		array(
    			'usernameTxt' => 'required',
    			'passwordTxt' => 'required'
    		)
    	);

    	if($validator->fails()){
    		
    		return redirect('login')->withErrors($validator)->withInput();
    	}
    	else{
    		$username = Input::get('usernameTxt');
    		$password = Input::get('passwordTxt');
           
    		$query = DB::table('user')->select('email','password','role')->where('email','=',$username)->where('password','=',$password)->first();
    		
    		if($query != null){
                $empName = $query->email;
                
                session_start();
                $_SESSION["usernameLogin"] = $username;
                $_SESSION["email"] = $empName;
    			
    			return view('admin_page');
    		}
    		else{
    			//disini kasi validasi error
    			$errorMessage = 'Username atau Password yang Anda masukkan salah';    			
    			return view('login',compact('errorMessage')); 
    		}    		
    		return 'sukses';
    	}

        
    }
public function logout() {
    return redirect('welcome');
}
   

}
