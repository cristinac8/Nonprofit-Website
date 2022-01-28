<?php

namespace App\Http\Controllers;
 
use App\Models\Blog;
use App\Models\Campaign;
use App\Models\User;

class AdminController extends Controller
{
    // Admin controller function index
    public function index()
    {
        $totalUser = User::count();
        $totalCampaign = Campaign::count();
        $totalStories = Blog::count();
        return view('admin.dashboard', compact('totalUser', 'totalCampaign', 'totalStories'));
    }

}
