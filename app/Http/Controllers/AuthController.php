<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use GuzzleHttp\RequestOptions::AUTH;
use Auth;

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

        session_start();
        
        $data = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        

        $client = new \GuzzleHttp\Client();
        $url = "http://localhost/vas_tech/ctmbp17/authentification";
        
        $response = $client->request('POST', 'http://localhost/vas_tech/ctmbp17/authentification', 
            ['form_params' => 
                [
                    'login' => $data['login'], 
                    'password' => $data['password']
                ]
            ]
        );
      
        
        if($response->getStatusCode()==200){

            $user = $response->getBody()->getContents();

            $user_json = json_decode($user);
            $user_collect = collect($user_json);
            //dd($user_collect['users']);
            
            //dd($user);

            if(!is_null($user_collect['users']) && $user_collect['users']->id)
            {
                //dd($user_collect['users']->id);
                $_SESSION['id'] = $user_collect['users']->id;
                $_SESSION['login'] = $user_collect['users']->login;
               

                return redirect()->route('admin')->with('success', 'Vous êtes connecté maintenant');

            }else{
                return redirect()->back()->with('error', 'Connexion impossible');
            }

        }
        

        /*$username = request('login');// $_POST["login"];
        $password = request('password');// $_POST["password"];
        //dd($password);
        //create a new Guzzle client
        $client = new \GuzzleHttp\Client();

        //send username and password to REST API to get the Authentication
        $response = $client->post('http://localhost/vas_tech/ctmbp17/authentification', [
            'auth' => [$username, $password]
        ]);
        //dd($response->getBody()->getContents());
        //dd($response->getStatusCode());
        //dd($response->getHeader('content-type')[0]);
        dd($response->getBody());

        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            return back()->with('danger','Login failed.');
        }else{
            return view('home');
        }*/
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


    public function logout()
    {
        session_start();
        session_destroy();
        return redirect()->route('login')->with('success', 'Deconnexion effectuée avec succès');
    }

    
}
