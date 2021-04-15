<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonneController extends Controller
{
    

    public function getAllAbonnes()
    {

    	$client = new \GuzzleHttp\Client();

        $request = $client->get('http://localhost/quizci/abonnes');
        $response = $request->getBody()->getContents();

        $data_abonnes = json_decode($response);
        //$data_abonnes = collect($abonnes->abonnes);
        //dd($data_abonnes);
    	//$abonnes = [];
    	return View('admin.pages.allabonnes', compact('data_abonnes'));
    }


    public function getDetailsAbonne($id_abonne)
    {
    	$url = "http://localhost/quizci/packs/abonne/".$id_abonne;
    	$client = new \GuzzleHttp\Client();

        $request = $client->get($url);
        $response = $request->getBody()->getContents();

        $data_abonnes = json_decode($response);
        $data_collect = collect($data_abonnes->data[0]);

        $nb_pack = count($data_collect['packs']);

        //============Récupération du score================//
        $telephone = $data_collect['telephone'];

        $url_number = "http://localhost/quizci/score/".$telephone;
        //dd($url);
        $client = new \GuzzleHttp\Client();

        $request = $client->get($url_number);
        $response_score = $request->getBody()->getContents();

        $data = json_decode($response_score);
        $datascores = collect($data->score[0]);
        //dd($score);

        //dd($nb_pack);
        //dd($data_collect['packs']);
        //dd($data_collect['telephone']);

    	return View('admin.pages.detail_abonne', compact('data_collect','nb_pack','datascores'));
    }
}
