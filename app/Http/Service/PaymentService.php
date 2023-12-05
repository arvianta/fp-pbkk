<?php

namespace App\Http\Service;

use App\Http\Repository\PaymentRepository;

class PaymentService
{
    protected $paymentRepository;

    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function createPayment($data)
    {
        $paymentId = $this->paymentRepository->createPayment($data);

        return $paymentId;
    }

    public function getUserPayments($request, $userId)
    {
        $query = $this->paymentRepository->getQuery();

        $query->where('user_id', $userId);

        if ($request->has('query')) {
            $searchText = $request->input('query');
            $query->where(function ($q) use ($searchText) {
                $q->where('method', 'LIKE', "%$searchText%")
                    ->orWhere('total', 'LIKE', "%$searchText%")
                    ->orWhere('date', 'LIKE', "%$searchText%")
                    ->orWhere('status', 'LIKE', "%$searchText%")
                    ->orWhere('user_id', 'LIKE', "%$searchText%");
            });
        }

        if ($request->has('sort_by')) {
            $sortBy = $request->input('sort_by');
            if ($sortBy === 'method_asc') {
                $query->orderBy('method', 'asc');
            } elseif ($sortBy === 'method_desc') {
                $query->orderBy('method', 'desc');
            } elseif ($sortBy === 'total_asc') {
                $query->orderBy('total', 'asc');
            } elseif ($sortBy === 'total_desc') {
                $query->orderBy('total', 'desc');
            } elseif ($sortBy === 'status_asc') {
                $query->orderBy('status', 'asc');
            } elseif ($sortBy === 'status_desc') {
                $query->orderBy('status', 'desc');
            }
        } else {
            $query->orderBy('date', 'desc');
        }

        $payments = $query->paginate(10);

        $data = [
            'title' => 'User Payments',
            'payments' => $payments,
            'query' => $request->input('query'),
            'sort_by' => $request->input('sort_by'),
        ];

        return $data;
    }

    public function getAllPayments($request)
    {
        $query = $this->paymentRepository->getQuery();

        if ($request->has('query')) {
            $searchText = $request->input('query');
            $query->where(function ($q) use ($searchText) {
                $q->where('method', 'LIKE', "%$searchText%")
                    ->orWhere('total', 'LIKE', "%$searchText%")
                    ->orWhere('date', 'LIKE', "%$searchText%")
                    ->orWhere('status', 'LIKE', "%$searchText%");
            });
        }

        if ($request->has('sort_by')) {
            $sortBy = $request->input('sort_by');
            if ($sortBy === 'method_asc') {
                $query->orderBy('method', 'asc');
            } elseif ($sortBy === 'method_desc') {
                $query->orderBy('method', 'desc');
            } elseif ($sortBy === 'total_asc') {
                $query->orderBy('total', 'asc');
            } elseif ($sortBy === 'total_desc') {
                $query->orderBy('total', 'desc');
            } elseif ($sortBy === 'status_asc') {
                $query->orderBy('status', 'asc');
            } elseif ($sortBy === 'status_desc') {
                $query->orderBy('status', 'desc');
            }
        } else {
            $query->orderBy('date', 'desc');
        }

        $payments = $query->paginate(10);

        $data = [
            'title' => 'All Payments',
            'payments' => $payments,
            'query' => $request->input('query'),
            'sort_by' => $request->input('sort_by'),
        ];

        return $data;
    }

    public function updatePayment($data)
    {
        $result = $this->paymentRepository->updatePayment($data);

        if($result) {
            return ['status' => 'success', 'message' => 'Payment updated successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Payment update failed'];
        }
    }
}