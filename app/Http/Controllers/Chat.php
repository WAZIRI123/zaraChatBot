<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alphaolomi\Sarufi\Sarufi as AlphaSarufi;
use App\Traits\SarufiTrait;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class Chat extends Controller
{

    

    public function index()
    {
        return view('welcome');
    }

    public function chatWithBot(Request $request)
    {
         // Handle the chatbot logic here and prepare the response
         $userMessage = $request->input('message');
         // Perform any processing on $userMessage
         
         $botResponse = "This is a sample bot response"; // Replace with your actual bot response
 
         return response()->json([
             'actions' => [
                 [
                     'send_message' => [$botResponse]
                 ]
             ]
         ]);
       
    }
    
 


}
