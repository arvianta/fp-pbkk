<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\PaymentService;
use App\Events\UserRegistration;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    protected $paymentService, $paymentRepository;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function createPayment(Request $request)
    {
        $validatedData = $request->validate([
            'method' => 'required|string|max:100',
            'total' => 'required|numeric',
            'date' => 'required|date',
            'product' => 'required|string|max:100',
            'user_id' => 'required',
            'payment_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $paymentId = $this->paymentService->createPayment($validatedData);

        //photo upload

        $payment = Payment::find($paymentId);
        $picturePath = $request->file('payment_photo')->store('public/pictures/' . $paymentId);
        $payment->payment_photo = str_replace('public/', '', $picturePath);

        
        $name = DB::table('users')->where('id', $request->user_id)->value('name');
        $notification = [
            'message' =>  $name . ' has bought ' . $validatedData['product'],
        ];
        event(new UserRegistration($notification['message']));

        $payment->save();
        if ($paymentId) {
            return redirect()->back()->with('status', 'Payment created successfully');
        } else {
            return redirect()->back()->with('error', 'Payment failed to create');
        }
    }

    public function getUserPayments(Request $request, $userId)
    {
        $payments = $this->paymentService->getUserPayments($request, $userId);

        return view('dashboard.user.transaction', $payments);
    }

    public function getAllPayments(Request $request)
    {
        $payment = $this->paymentService->getAllPayments($request);

        return view('dashboard.admin.paymentlist', $payment);
    }

    public function updatePayment(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'method' => 'required|string|max:100',
            'total' => 'required|numeric',
            'product' => 'required|string|max:100',
            'date' => 'required|date',
            'status' => 'required|string|max:100',
            'user_id' => 'required',
        ]);

        //jika status dalam request adalah completed buat data di database subscription
        if($validatedData['status'] == 'completed'){
            
        }
        $result = $this->paymentService->updatePayment($validatedData);

        return redirect()->back()->with($result);
    }
}
