<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.home');
    }

    public function archive()
    {
        return view('public.archive');
    }

    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        return view('public.contact');
    }
    public function newsletterLandingPage()
    {
        return view('public.newsletter-landing-page');
    }

    public function privacyPolicy()
    {
        return view('public.privacy-policy');
    }

    public function termsOfService()
    {
        return view('public.terms-of-service');
    }

    public function singleArchive($slug)
    {
        return view('public.post');
    }
}
