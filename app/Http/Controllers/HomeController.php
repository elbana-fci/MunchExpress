<?php

namespace App\Http\Controllers;
use App\Services\MenuService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(MenuService $service)
    {
        //$menus = Menu::all();
        $resto_id = [1];

        $menus = $service->getMenuWithCategory($resto_id);

        return view('home', compact('menus'));
    }
}
