<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use GuzzleHttp\RequestOptions::AUTH;

class AuthController extends Controller
{
    

    public function login()
    {
    	return View('admin.auths.login');
    }


    public function register()
    {
        return View('admin.auths.register');
    }


    public function postLogin(Request $request)
    {
        // dd($request);

        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost/vas_tech/ctmbp17/authentification', [
            'auth' => ['login', 'password']
        ]);

        if($res){
            echo "Connecté";
        }else{
            echo "Non connecté";
        }
    }

    public function postRegister(Request $request)
    {	

    	$data = request()->validate([
    		'login' => 'required|email',
            'password' => 'required|min:6',
    	]);

        //dd($request);
    	$client = new \GuzzleHttp\Client();
	    $url = "http://localhost/vas_tech/ctmbp17/register";
	    
	    $request = $client->post($url,  [

	    	'form_params'=>[
	    		'login' => $data['login'],
	    		'password' => $data['password'],
	    	],
	    	'timeout' => 5,
	    ]);

	    //$response = $request->send();

    	return redirect()->route('login');
    }

    
}
