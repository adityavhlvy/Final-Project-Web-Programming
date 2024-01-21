<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $apiKey = env('NEWS_API');
        $url = "https://newsapi.org/v2/top-headlines?country=us&apiKey=$apiKey";

        $client = new Client();
        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);

        return view('news', ['articles' => $data['articles']]);
    }
}
