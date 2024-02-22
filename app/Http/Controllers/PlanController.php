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

    public function show(Plan $plan, Request $request) // страница ввода карты
    {
        $intent = $request->user()->createSetupIntent();
        return view("subscription", compact("plan", "intent"));
    }

    public function subscription(Request $request) // создание подписки
    {
        $user = $request->user();
        $plan = Plan::find($request->plan);

        if ( count($user->subscriptions) === 0 ){
            $user->newSubscription($plan->id, $plan->stripe_plan)->create($request->token);
            return view("subscription_success");
        } 
        else {
            if ($user->subscriptions->first()->type == $plan->id) {
                return view('error')->with('error_message', 'you already have this subscription');
            }
            else {
                $user->subscription($user->subscriptions->first()->type)->cancel();
                $user->newSubscription($plan->id,  $plan->stripe_plan)->create($request->token);
                return redirect('/user/profile');
            } 
        }
    }

    public function cancel_subscription(Request $request, $subscription_type){// отмена существующей подписки
        try{
            $request->user()->subscription($subscription_type)->cancel();
            return redirect('/user/profile');
        } catch (Exception $e){
            return view ('error');
        }
    }
}
