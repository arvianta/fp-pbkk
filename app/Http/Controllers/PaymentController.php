<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\PaymentService;
use App\Models\Payment;

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
            'user_id' => 'required',
            'payment_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $paymentId = $this->paymentService->createPayment($validatedData);

        //photo upload

        $payment = Payment::find($paymentId);
        $picturePath = $request->file('payment_photo')->store('public/pictures/' . $paymentId);
        $payment->payment_photo = str_replace('public/', '', $picturePath);


        if ($paymentId) {
            return redirect()->back()->with('status', 'Payment created successfully');
        } else {
            return redirect()->back()->with('error', 'Payment failed to create');
        }
    }

    public function getUserPayments(Request $request, $userId)
    {
        $payments = $this->paymentService->getUserPayments($request, $userId);

        return view('user.payments', compact('payments'));
    }

    public function getAllPayments(Request $request)
    {
        $payment = $this->paymentService->getAllPayments($request);

        return view('user.payment', compact('payment'));
    }

    public function updatePayment(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'method' => 'required|string|max:100',
            'total' => 'required|numeric',
            'date' => 'required|date',
            'status' => 'required|string|max:100',
            'user_id' => 'required',
        ]);

        $result = $this->paymentService->updatePayment($validatedData);

        return redirect()->back()->with($result);
    }
}
