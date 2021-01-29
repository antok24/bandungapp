<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BAController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $url = 'http://api.ut.ac.id/token';

        $token = $client->request('GET','http://api.ut.ac.id/token',['Basic Auth' => 'b4nDun9@pi','@pi20215!T4']);
        $tokenku = $token->json();
        dd($tokenku);

        //dd($stok);

        // return view('BahanAjar.index',compact('hasil_token'));
    }
}
