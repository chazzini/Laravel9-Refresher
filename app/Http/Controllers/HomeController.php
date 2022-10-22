<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $services = [
            [
                'title' =>'software development',
                'description'=>'lorem  test is the content'
            ],
            [
                'title' =>'graphic design',
                'description'=>'lorem  test is the content'
            ],
            [
                'title' =>'Programming',
                'description'=>'lorem  test is the content'
            ]
        ];

        return view('index',['services' => $services]);
    }
}
