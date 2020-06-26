<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    private $home;

    public function __construct(Home $home) {
        $this->home = $home;
    }

    public function index(Request $request)
    {
        
    }
}
