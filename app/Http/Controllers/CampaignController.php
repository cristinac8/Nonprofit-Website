<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CampaignController extends Controller
{

    public function __construct()
    {
        Paginator::useBootstrap();
    }

    public function log($id)
    {
        $campaign = Campaign::where('id', $id)->first();
        $donations = Donation::with('user')
            ->where([
                'campaignID' => $id,
                'status' => 1,
            ])
            ->paginate(12);
        return view('admin.donation', compact('campaign', 'donations'));
    }


    public function index()
    {
        $campaigns = Campaign::orderBy('id', 'desc')->paginate('12');
        return view('admin.campaign', compact('campaigns'));
    }

    public function store(Request $request)
    {
        $campaign = new Campaign();
        $campaign->title = $request->titleEN;
        $campaign->description = $request->descriptionEN;
        $campaign->titleRO = $request->titleRO;
        $campaign->descriptionRO = $request->descriptionRO;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = date('y-m-d') . $image->getClientOriginalName();
            $destinationPath = public_path('campaign');
            $image->move($destinationPath, $imageName);
            $campaign->photo = $imageName;
        }

        $campaign->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $campaign = Campaign::where('id', $id)->first();
        return view('admin.campaign-update', compact('campaign'));
    }

    public function update(Request $request, $id)
    {
        $campaign = Campaign::where('id', $id)->first();
        $campaign->title = $request->titleEN;
        $campaign->description = $request->descriptionEN;
        $campaign->titleRO = $request->titleRO;
        $campaign->descriptionRO = $request->descriptionRO;

        if ($request->hasFile('image')) {
            unlink(public_path('campaign/' . $campaign->photo));

            $image = $request->file('image');
            $imageName = date('y-m-d') . $image->getClientOriginalName();
            $destinationPath = public_path('campaign');
            $image->move($destinationPath, $imageName);
            $campaign->photo = $imageName;
        }
        $campaign->save();

        return redirect()->to('admin/campaign');
    }

    public function show($id)
    {
        $campaign = Campaign::where('id', $id)->first();
        if ($campaign == "") {
            abort(404);
        }
        return view('client.campaign-item', compact('campaign'));
    }

    public function all()
    {
        $campaigns = Campaign::orderBy('id', 'desc')->paginate(9);
        return view('client.campaigns', compact('campaigns'));
    }
}
