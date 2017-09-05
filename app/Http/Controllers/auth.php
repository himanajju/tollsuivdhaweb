<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Library\GuzzleHelper;
use App\Http\Requests;

class auth extends Controller
{
    public function login(){
        return view('auth/login');
    }

    public function auth(Request $request){
        $request_param = ['email' => $request->input('email'),
                          'password' => $request->input('password')];

        $res = GuzzleHelper::postMethod('/web-login',$request_param);
        $response = json_decode($res->getBody(),true);
        
        if($response['status'] == 200){
            // create session here
            Session::push('userdata', $response['data']); 
            return redirect('dashboard');
        }else{
            return redirect('/')->with('error',$response['message']);   
        }
    }
    
    public function logout(){
        session()->flush();
        return redirect('/');
    }

}
