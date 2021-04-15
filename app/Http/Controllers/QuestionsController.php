<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    

    public function addQuestion(Request $request)
    {
    	$data = $request->validate([
    		'libelle' => 'required',
    		'status' => 'required',
    	]);

    	$client = new \GuzzleHttp\Client();
	    $url = "http://localhost/quizci/create/question";
	    //dd($url);
	    //$data['name'] = "codechief";
	    $request = $client->post($url, [
	    	'form_params'=> [
	    			'libelle' => $data['libelle'],
		    		'status' => $data['status']
	    		],
	    	'timeout' => 5,
	    ]);
	    //dd($request);
	    return redirect()->back()->with('questadd', 'La question enregistrée avec succèss');
    }

    public function addQuestions(Request $request)
    {
    	$data = $request->validate([
    		'id_question' => 'required',
    		'libelle' => 'required',
    		'correct' => 'required',
    	]);
    	//dd($data);
    	$client = new \GuzzleHttp\Client();
	    $url = "http://localhost/quizci/create/proposition";
	    //dd($url);
	    //$data['name'] = "codechief";
	    $request = $client->post($url, [
	    	'form_params'=> [
	    			'libelle' => $data['libelle'],
		    		'correct' => $data['correct'],
		    		'id_question' => $data['id_question']
	    		],
	    	'timeout' => 5,
	    ]);
	    //dd($request);
	    return redirect()->back()->with('propositonadd', 'La question enregistrée avec succèss');
    }
}
