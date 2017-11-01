<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Stripe\{
    Charge, Customer
};

class PurchasesController extends Controller
{

    //check if user is already entrolled and if not, return payment page.
    public function check()
    {
        $user = User::findOrFail(request('user'));
        $lesson = Lesson::findOrFail(request('lesson'));

        if ($user->lessons->contains($lesson->id)) {
            Session::flash('warning', 'You are already booked on this course!');

            return redirect()->back();
        } else {

            return view('public.payment', compact('lesson'));
        }

    }

    //conduct stripe payment and enroll user to lesson.
    public function store()
    {

        $lesson = Lesson::findorFail(request('lesson_id'));
        $user = User::findOrFail(request('user_id'));


        //reduce spaces left
        $lesson->spaces_left = $lesson->spaces_left - 1;
        $lesson->save();

        //attach the items to the receipt.
        $user->lessons()->attach($lesson);


        //create stripe customer
        $customer = Customer::create([
            'email' => request('stripeEmail'),
            'source' => request('stripeToken')

        ]);

        //charge stripe customer
        Charge::create([
            'customer' => $customer->id,
            'amount' => $lesson->subject->price,
            'currency' => 'gbp'
        ]);

        return ['redirect' => '/classes'];

    }

}
