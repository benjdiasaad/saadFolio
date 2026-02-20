<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexPage()
    {
        return view('home');
    }

    public function postContact(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        \Log::channel('contact')->info('New contact message', [
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message'],
            'time' => now()->toDateTimeString(),
        ]);

        return response()->json([
            'ok' => true,
            'message' => __('portfolio.contact.toast'),
        ]);
    }
}
