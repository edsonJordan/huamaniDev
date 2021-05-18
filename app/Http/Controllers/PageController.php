<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function portfolio()
    {
        return "Esto sera tu portafolio";
    }
    public function blog()
    {
        return "Esto sera tu blog";
    }
}
