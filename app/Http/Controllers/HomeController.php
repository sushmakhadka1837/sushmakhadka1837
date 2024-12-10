<?php
namespace App\Http\Controllers;

use App\Models\Service;

class HomeController extends controller
{
public function index()

{
    $services = Service::all();
    return view('master', compact('services'));
}

    public function contact()
    {
        return view('contact');
    }
    
}