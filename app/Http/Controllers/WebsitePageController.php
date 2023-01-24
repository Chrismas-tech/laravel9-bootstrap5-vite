<?php

namespace App\Http\Controllers;

class WebsitePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('website.pages.home');
    }

    public function termsOfService()
    {
        return view('website.pages.terms-of-service');
    }

    public function privacyPolicy()
    {
        return view('website.pages.privacy-policy');
    }

    public function cookiesPolicy()
    {
        return view('website.pages.cookies-policy');
    }

    public function shippingAndReturnsPolicy()
    {
        return view('website.pages.shipping-and-returns-policy');
    }
}
