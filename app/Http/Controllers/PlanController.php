<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Subscription;
use Exception;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index() 
    {
        $plans = Plan::get();
        return view('plans', compact('plans'));
    }

    public function payment(Plan $plan, Request $request) // страница ввода карты
    {
        $intent = $request->user()->createSetupIntent();
        return view("subscription-payment", compact("plan", "intent"));
    }

    public function subscription(Request $request) // создание подписки
    {
        $user = $request->user();
        $plan = Plan::find($request->plan);

        if ( count($user->subscriptions) === 0 ){
            $r = $user->newSubscription($plan->id, $plan->stripe_plan)
                 ->create($request->token); //plan->id id in DB, $plan->stripe_plan - id on stripe
            $r = Subscription::find($r->id); //не нашел как расширить модель подписки, поэтому в бд дефолтное значение - 0
            $r->remaining_requests = $plan->total_requests;
            $r->save();

            return view("subscription-success");
        } 
        else {
            if ($user->subscriptions->first()->type == $plan->id) {
                return view('error')->with('error_message', 'you already have this subscription');
            }
            else {
                // $user->subscription($user->subscriptions->first()->type)->cancel();
                // $user->newSubscription($plan->id,  $plan->stripe_plan)->create($request->token);
                return redirect("/subscription/update/".$request->plan); //если подписка есть, перенаправить на изменение
            } 
        }
    }

    public function cancel_subscription(Request $request, $subscription_type)// отмена существующей подписки
    {
        try{
            $request->user()->subscription($subscription_type)->cancel();
            return redirect('/user/profile');
        } catch (Exception $e){
            return view ('error');
        }
    }
    public function swap_subscription(Request $request, $new_sub_num)
    {
        try{
            $s = Subscription::where('user_id', $request->user()->id)->latest()->first();// у пользователя в теории может быть много неактивных подписок но последняя активна
            $s->type=$new_sub_num;// тип подписки в записи подписки приходится менять вручную
            $s->remaining_requests = Plan::find($new_sub_num)->total_requests;
            $s->save(); 
            $stripe_price_id = Plan::find($new_sub_num)->stripe_plan;
            $request->user()->subscriptions->first()->swapAndInvoice($stripe_price_id);
            return redirect('/user/profile');
        } catch(Exception $e){
            return $e;
        }
    }
}
