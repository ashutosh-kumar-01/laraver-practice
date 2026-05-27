<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    // Show Page
    public function index(Request $request)
    {
        return view('cookie');
    }

    // Set Cookie
    public function setCookie()
    {
        return response("Cookie Set Successfully")
                ->cookie('username', 'Rahul', 60);
    }

    // Get Cookie
    public function getCookie(Request $request)
    {
        $cookie = $request->cookie('username');

        if($cookie)
        {
            return "Cookie Value : " . $cookie;
        }

        return "Cookie Not Found";
    }

    // Delete Cookie
    public function deleteCookie()
    {
        return response("Cookie Deleted Successfully")
                ->cookie(Cookie::forget('username'));
    }
}