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

        $data = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        //dd($data);
        // dd($request);
        /*
        $client = new \GuzzleHttp\Client();

        $res = $client->request('POST', 'http://localhost/vas_tech/ctmbp17/authentification', [
            'auth' => ['login', 'password']
        ]);
        */

        $client = new \GuzzleHttp\Client();
        $url = "http://localhost/vas_tech/ctmbp17/authentification";
        /*$response = $client->post($url, [
            'headers' => ['Content-type' => 'application/json'],
            'auth' => [
                'david7@gmail.com', 
                '$2y$10$GlGbRRqTRyfqOYLqjQad.uJqm/X7GqamsjM/hBazsQIpiZIymsRRW'
            ],
            'json' => [                        
                "login"=>"david7@gmail.com",
            ], 
        ]); */

        $response = $client->request('POST', 'http://localhost/vas_tech/ctmbp17/authentification', 
            ['form_params' => 
                [
                    'login' => $data['login'], 
                    'password' => $data['password']
                ]
            ]
        );
        dd($response->getBody());
        if($response){

            $user = $response->getBody()->getContents();
            $data = json_decode($user);
            $data_collect = collect($data->users);

            //dd($data_collect[0]->pass);
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
