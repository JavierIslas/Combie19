<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $portfolio = [
            ['title' => 'Proyecto #1'],
        ];

        return view('portfolio', compact('portfolio'));
    }

   }