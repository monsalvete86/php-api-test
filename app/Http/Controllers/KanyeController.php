<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KanyeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        echo "
        <form>
            <ul>"; 
            for($i = 0; $i < 5; $i++) {
                $response = Http::get('http://api.kanye.rest');
                $responseBody = json_decode($response->body());
                echo "  <li>" . $responseBody->quote . "</li>"; 
            }            
        echo "</ul>
            <button type='submit'/>Reload</button>
        </form>";
        exit;
        return view('welcome', []);
    }

    public function api_list_kanye() 
    {
        
        
        for($i = 0; $i < 5; $i++) 
        {
            $response = Http::get('http://api.kanye.rest');
            $responseBody = json_decode($response->body());
            $quoteList[] = $responseBody->quote;
        }
        return json_encode($quoteList);
    }
}
