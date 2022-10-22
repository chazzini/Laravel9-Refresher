<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\View;

class HomeController extends Controller
{
    /**
     * Method to return the index page
     * with values of service
     * @return view
     */
    public function index()
    {
        $services = Service::all();

        return view('index', ['services' => $services]);
    }
}
