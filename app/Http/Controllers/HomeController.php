<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home');
    }
    public function about()
    {
        return view('website.about');
    }
    public function service()
    {
        return view('website.service');
    }
    public function singleService()
    {
        return view('website.service-single');
    }
    public function donate()
    {
        return view('website.donate');
    }
    public function event()
    {
        return view('website.event');
    }
    public function singleEvent()
    {
        return view('website.event-single');
    }
    public function blog()
    {
        return view('website.blog');
    }
    public function blogLeft()
    {
        return view('website.blog-left');
    }
    public function blogFull()
    {
        return view('website.blog-full-with');
    }
    public function blogSingle()
    {
        return view('website.blog-single');
    }
    public function blogSingleFluid()
    {
        return view('website.blog-single-fluid');
    }
    public function blogSingleLeft()
    {
        return view('website.blog-single-left');
    }
    public function contact()
    {
        return view('website.contact');
    }
}
