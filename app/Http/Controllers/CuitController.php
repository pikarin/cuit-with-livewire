<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CuitController extends Controller
{
    /**
     * Display listing of the resource
     */
    public function index(): View
    {
        return view('cuits');
    }
}
