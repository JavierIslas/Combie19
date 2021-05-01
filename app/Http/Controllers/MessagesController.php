<?php

namespace App\Http\Controllers;

class MessagesController extends Controller
{
    function store(){
    	Request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:5'
    	]);

    	return 'Mensaje enviado';
    }
}
