<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function index()
    {
        // $response = Http::get('http://sikel.tasikmalayakota.go.id/integrateagama');

        //api
        $api = 'http://sikel.tasikmalayakota.go.id/integrateagama';
        //init resource nya
        $ch = curl_init($api);
        //set return type
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        $a = json_decode($result, true);
        // dd($a);
        return view('home/client', compact(['a']));
    }
}
