<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BookingsController extends Controller
{

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

}
