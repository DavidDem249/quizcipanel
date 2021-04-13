<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

session_start();

class AdminDashboard extends Controller
{
    

    public function index()
    {
    	  if(!isset($_SESSION['id']))
  		  {
  			    return redirect()->route('login')->with('error', 'Veilliez vous connecté d\'abord');
  		  }

    	  return View('admin.index');
    }

    /* Methode pour afficher les questions **/

    public function questions()
    {

        $client = new \GuzzleHttp\Client();

        $request = $client->get('http://localhost/quizci/questions');
        $response = $request->getBody()->getContents();

        $res_json_decode = json_decode($response);
        $data_collection = collect($res_json_decode->questions);
        //dd($data_collect);

        return View('admin.pages.questions', compact('data_collection'));
    }

    /* Methode pour afficher les propositions d'une question **/

    public function propositionsQuestion($id_question)
    {
        
        $url = "http://localhost/quizci/propositions/question/".$id_question;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        //$response = array($response);

        $err = curl_error($ch);  //if you need
        curl_close($ch);
        //dd(json_decode($response));

        $getProposition = json_decode($response);

        $nbProposition = count($getProposition->data[0]->proposition);
        $numero = 1;

        //dd($nbProposition);
        //$getProposition = collect($getProposition);

        /*
        //================== 2 éme methode ========================//
        $client = new \GuzzleHttp\Client();
        $url = "http://localhost/quizci/propositions/question/".$id_question;
        $request = $client->get($url);
        $response = $request->getBody()->getContents();
        $getProposition = json_decode($response);
        $getProposition = collect($getProposition);
        dd($getProposition);
        */

        return View('admin.pages.proposition', compact('getProposition','nbProposition', 'numero'));
    }
}
