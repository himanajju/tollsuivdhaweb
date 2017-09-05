<?php

namespace App\Http\Controllers;
use App\Library\GuzzleHelper;
use Illuminate\Http\Request;
use App\Http\Requests;

class DefaultController extends Controller
{
    public function adduser(){
        return view('app/add-user');
    }

    public function addvehicle(){
        return view('app/add-vehicle');
    }
    
    public function dashboard(){
        return view('app/dashboard');
    }
    public function addvip(){
        return view('app/add-vip');
    }
    public function setvip(Request $request){
        $request_param = ['vehicle_no' =>$request->input('vehicleno'),
                          'designation' => $request->input('designation')];
        $res = GuzzleHelper::postMethod('/vipuser/add',$request_param);
        $response = json_decode($res->getBody(),true);
        if($response['status'] == 200){
            return redirect('add-vip')->with('success',$response['message']); 
        }else{
            return redirect('add-vip')->with('error',$response['message']);   
        }
    }
    public function getVehicleDetails(Request $request){
        
        $request_param = null;
        $vehicleno = $request->input('vehicleno');
        $res = GuzzleHelper::getMethod('/vehicle/get-details/'.$vehicleno.'/2/1',$request_param);
        $response = json_decode($res->getBody(),true);
        if($response['status'] == 200){
            return redirect('add-vehicle')->with('vehicleDetails',$response); 
        }else{
            return redirect('add-vehicle')->with('error',$response['message']);   
        }
        
    }
    public function setuser(Request $request){
        $request_param = ['name' =>$request->input('name'),
                          'email' => $request->input('email'),
                          'password' => $request->input('password'),
                          'contact_no' => $request->input('contactno'),
                          'usergroup' => $request->input('usergroup')];
        
        $res = GuzzleHelper::postMethod('/users/add',$request_param);
        $response = json_decode($res->getBody(),true);
        
        if($response['status'] == 200){
            return redirect('add-user')->with('success',$response['message']); 
        }else{
            return redirect('add-user')->with('error',$response['message']);     
        }
        
    }
    
    public function tollpayment(Request $request){
        $qrdata = explode("@",$request->input('qrcode'));  
        $request_param = ['vehicle_no' =>$request->input('vehicleno'),
                          'toll_id' => '1',
                          'wallet_id' => $qrdata['3'],
                          'user_id' => $qrdata['1']];
        $res = GuzzleHelper::postMethod('/toll/pay',$request_param);
        $response = json_decode($res->getBody(),true);
        
        if($response['status'] == 200){
            return redirect('add-vehicle')->with('success',$response['message']); 
        }else{
            return redirect('add-vehicle')->with('error',$response['message']);   
        }
        
   }
    
    public function blockUser(){
        return view('app/block-user');
    }
    
    public function setblockuser($email = null){
        $request_param=null;
        $res = GuzzleHelper::getMethod('/admin/block/'.$request->input('email').'/1',$request_param);
        $response = json_decode($res->getBody(),true);
        if($response['status'] == 200){
            return redirect('block-user')->with('success',$response['message']); 
        }else{
            return redirect('block-user')->with('error',$response['message']);   
        }  
    }
    
    public function suspectedVehicle(){
        return view('app/suspect-vehicle-add');
    }
    
//    public function addSuspectedVehicle(Request $request){
//        $request_param = ['vehicle_no' =>$request->input('vehicleno'),
//                         'remarks' => $request->input('remarks'),
//                         'user_id' => 40];
//        
//        $res = GuzzleHelper::postMethod('/vehicle/add-suspected',$request_param);
//        $response = json_decode($res->getBody(),true);
//        print_r($response);die;
//        if($response['status'] == 200)
//        {
//            return redirect('add-suspected-vehicle')->with('success',$response['message']); 
//        }else{
//            return redirect('add-suspected-vehicle')->with('error',$response['message']);   
//        }
//    }
//    
//    public function getSuspectedVehicleDetails(){
//        $res = GuzzleHelper::getMethod('/vehicle/get-details/');
//        $response = json_decode($res->getBody(),true);
//        if($response['status'] == 200){
//            return redirect('add-vehicle')->with('vehicleDetails',$response); 
//        }else{
//            return redirect('add-vehicle')->with('error',$response['message']);
//        }
//    }
}
