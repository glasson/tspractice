<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Exception;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index() 
    {
        $plans = Plan::get();

        return view('plans', compact('plans'));
    }

    public function show(Plan $plan, Request $request)
    {
        $intent = $request->user()->createSetupIntent();

        return view("subscription", compact("plan", "intent"));
    }

    public function subscription(Request $request)
    {
        $user = $request->user();
        $plan = Plan::find($request->plan);

        // $user->subscription($user->subscriptions[0]['type'])->cancel(); //cancel previous subscription
        

        $subscription = $user->newSubscription($request->plan, $plan->stripe_plan)->create($request->token);
   
        return view("subscription_success");
    }

    public function cancel_subscription(Request $request, $subscription_type){
        try{
            // $request->user()->subscription($subscription_type)->cancel();
            // $name = Plan::find($subscription_type)->name;
            // return view('components.success-subscription-canceled');
            foreach($request->user()->subscriptions as $sub){
                if ($sub->type == $subscription_type){
                    $sub->delete();
                    return redirect('/user/profile');
                }
            }
        } catch (Exception $e){
            return view ('error');
        }
    }
}
