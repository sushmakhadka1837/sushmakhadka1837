<?php

namespace App\Http\Controllers;

class HomeController extends controller
{
public function index()

{
$about="about";
$contact="contact";
return view("index",compact(
    "about","contact"));

    }
}