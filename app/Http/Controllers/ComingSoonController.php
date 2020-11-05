<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    public function index()
    {
        $openDateEnv = env('EDUSIANA_OPEN_COMING_SOON');

        if (!$openDateEnv) {
            return redirect()->route('blog.index');
        }

        $openDate = new DateTime($openDateEnv);
        $now = new DateTime('today');

        if ($now >= $openDate) {
            return redirect()->route('blog.index');
        }

        return view('comingsoon');
    }
}
