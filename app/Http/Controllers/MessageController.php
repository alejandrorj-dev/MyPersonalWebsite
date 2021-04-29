<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
    	$msg = request()->validate([
    		'name' => 'required',
    		'email' => 'required | email',
    		'subject' => 'required',
    		'content' => 'required | min:3'
    	]);

        Mail::to('firesoft1234@gmail.com')->queue(new MessageReceived $msg);

    	return back()->with('status', __('We received your message, we will reply in less than 24 hours.'));
    }
}
