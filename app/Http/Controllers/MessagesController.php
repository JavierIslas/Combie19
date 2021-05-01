<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    function store(){
    	$message = Request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:5'
    	]);
   
   		Mail::to('Dimcairion@live.com')->send(new MessageReceived($message));

    	return 'Mensaje enviado';
    }
}
