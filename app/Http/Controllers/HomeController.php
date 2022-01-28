<?php

namespace App\Http\Controllers;

use App;
use App\Models\Blog;
use App\Models\Campaign;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $campaigns = Campaign::orderBy('id', 'desc')
            ->limit(5)
            ->get();

        $stories = Blog::orderBy('id', 'desc')
            ->limit(6)
            ->get();


        return view('client.home', compact('campaigns', 'stories'));
    }

    public function lang($locale)
    {
        if (!in_array($locale, ['en', 'ro'])) {
            abort(400);
        }
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
