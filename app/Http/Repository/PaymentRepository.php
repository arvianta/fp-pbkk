<?php

namespace App\Http\Repository;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Builder;

class PaymentRepository
{
    public function getQuery(): Builder
    {
        return Payment::query();
    }

    public function createPayment($data)
    {
        $payment = new Payment();
        $payment->method = $data['method'];
        $payment->total = $data['total'];
        $payment->date = $data['date'];
        $payment->product = $data['product'];
        $payment->status = "Pending";
        $payment->user_id = $data['user_id'];
        $payment->save();

        return $payment->id;
    }

    public function updatePayment($data)
    {
        $payment = Payment::find($data['id']);
        $payment->method = $data['method'];
        $payment->total = $data['total'];
        $payment->date = $data['date'];
        $payment->product = $data['product'];
        $payment->status = $data['status'];
        $payment->user_id = $data['user_id'];
        $payment->save();

        return true;
    }
}