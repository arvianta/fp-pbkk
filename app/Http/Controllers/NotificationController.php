<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    //create notification
    public function createNotification(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required',
        ]);
        
        $notification = Notification::create($validatedData);
        return back()->with('status', 'Broadcast Notification Successfully.');
    }

    //get all notification
    public function getNotification()
    {
        $notification = Notification::all();
        return $notification;
    }
}
