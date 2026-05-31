<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function welcome()
    {
        $title = 'Welcome to My Website';
        $name = 'Arato';    
        return view('welcome', compact('title', 'name'));
    }

    public function products()
    {
        return view('products');
    }

    public function about()
    {
        $abouttitle = 'About Us';
        return view('about', compact('abouttitle'));
    }

    public function contact()
    {
        $contact = 'My Contact';
        return view('contact', compact('contact'));
    }

    public function services()
    {
        $serv = 'Our Services';
        $info = 'Contact us for more information';
        return view('services', compact('serv', 'info'));
    }

    public function form()
    {
        $formTitle = 'Product Inquiry';
        return view('form', compact('formTitle'));
    }

}