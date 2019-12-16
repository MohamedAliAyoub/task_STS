<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;


class ClientController extends Controller
{
    
    function apiResponse($code, $message ,$data){

        return response()->json(
            [   
                'code'=>$code,
                'message'=>$message,
                'data'=>$data,

            ]);


    }



    public function create( Request $request)
    {
        $v= Validator($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:clients',
            'phone'=>'required|integer',
        ]);
        if($v->fails())
        {
            return $v->errors()->first();
        }

        $client = Client::create($request->all() ) ;
        return $this->apiResponse( 200,  "sucess"  , '' );
    }


    public function get( Request $request){


    	$client = Client::get()->all(); 
        return $this->apiResponse( 200,  "sucess"  , $client );

    }


}
