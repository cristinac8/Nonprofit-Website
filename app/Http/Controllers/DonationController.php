<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class DonationController extends Controller
{

    public function donate(Request $request)
    {
        $amount = $request->donation_amount;
        if ($request->cstOrNo){
            $amount = $request->donation_amount_cst;
        }

        $donation = new Donation();
        $donation->text  = $request->text;
        $donation->campaignID = $request->campaign_id;
        $donation->userID = $request->user_id;
        $donation->amount = $amount;
        $donation->save();

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $ses = Session::create([
            'success_url' => url('success/{CHECKOUT_SESSION_ID}/'.$donation->id),
            'cancel_url' => url('canceled'),
            'mode' => 'payment',
            // 'automatic_tax' => ['enabled' => true],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => env('APP_NAME'),
                        'description' => $request->title_donation,
                    ],
                    'unit_amount' => 100 * $amount,
                ],
                'quantity' => 1,
            ]]
        ]);

        return redirect($ses->url);
    }

    public function checkSuccess($id,$donationID){
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $data = Session::retrieve($id);
        $paymentStatus = $data->payment_status;

        $donation = Donation::where('id', $donationID)->first();
        if ($paymentStatus == 'paid'){
            $donation->status = 1;
            $donation->save();
        }
        return view('client.success');
    }

    public function failed(){
        return view('client.failed');
    }
}
