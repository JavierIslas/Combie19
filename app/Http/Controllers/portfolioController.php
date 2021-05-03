<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chofer;

class portfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $portfolio = Chofer::get();

        return view('portfolio', compact('portfolio'));
    }

   }