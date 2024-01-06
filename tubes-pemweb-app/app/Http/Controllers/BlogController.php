<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function index()
    {
        $response = Http::get('https://newsapi.org/v2/top-headlines', [
            'apiKey' => config('services.newsapi.key'),
            // 'sources' => 'kompas',
            'country' => 'id', // Ganti dengan kode negara Anda
        ]);

        $articles = $response->json()['articles'];

        return view('blog', compact('articles'));
    }
}
