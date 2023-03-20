<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $service;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(HomeService $homeService)
    {
        $this->middleware('auth');
        $this->service = $homeService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $graficos = $this->service->graficos();
        return view('home', compact('graficos'));
    }
}
