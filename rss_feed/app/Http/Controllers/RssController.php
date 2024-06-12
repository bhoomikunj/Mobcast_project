<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RssController extends Controller
{
    public function index()
    {
        $response = Http::get('https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json');
        $data = $response->json();
        
        // Check if the structure is as expected
        if (isset($data['channel']) && isset($data['channel']['item'])) {
            $items = $data['channel']['item'];
        } else {
            $items = [];
        }
        
        return view('rss', ['items' => $items]);
    }
}
