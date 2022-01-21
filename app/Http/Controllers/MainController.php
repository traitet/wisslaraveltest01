<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MainController extends Controller
{

    //
    // public function index()
    // {

    //     // $client = new Client();
    //     // $response = Http::get('http://10.100.1.94/wiss-api/ErrorLog/Mockup');
    //     $response = Http::get('http://10.100.1.94/wiss-api/EventLog/1S%20SRCTBS1A4046');

    //     if($response->status() == 200){

    //         $result = json_decode($response->body(),true);

    //         $keyArray = array_keys($result[0]);

    //     }else{
    //         $result = 'no result';
    //     }


    //     return view('main.main', compact('result','keyArray'));
    // }

    function getData(Request $req)
    {

        if (!empty($req->input())) {
            
            $response = Http::get('http://10.100.1.94/wiss-api/EventLog/1S%20SRCTBS1A4046');
            if ($response->status() == 200) {

                $result = json_decode($response->body(), true);

                $keyArray = array_keys($result[0]);
            } 
        }

        return view('main', compact('result','keyArray'));

    }
}
