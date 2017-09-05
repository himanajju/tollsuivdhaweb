<?php

namespace App\Library;

class GuzzleHelper
{
    
    public static function getMethod($method, $params = null){
        $client = new \GuzzleHttp\Client();
        return $client->request('GET', env('API_URL').$method,[
            'query' => $params
        ]);
    }
    
    public static function postMethod($method, $params){
        $client = new \GuzzleHttp\Client();
        return $client->request('POST', env('API_URL').$method,[
            'form_params' => $params
        ]);
    }
    
    public static function postMultiPartMethod($method, $multipart){
        $client = new \GuzzleHttp\Client();
        return $client->request('POST', env('API_URL').$method,[
            'multipart' => $multipart
        ]);
    }
    
}
