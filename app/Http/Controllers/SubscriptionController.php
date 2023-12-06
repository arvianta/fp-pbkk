<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\SubscriptionService;

class SubscriptionController extends Controller
{
    protected $subscriptionService;

    public function __construct(SubscriptionService $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;
    }

    public function createSubscription(Request $request)
    {
        $data = $request->all();

        $result = $this->subscriptionService->createSubscription($data);

        return redirect()->back()->with('status', $result['message']);
    }
    
    public function getAllSubscriptionsWithNamesPaginated(Request $request)
    {
        $perPage = $request->has('per_page') ? $request->per_page : 10;

        $result = $this->subscriptionService->getAllSubscriptionsWithNamesPaginated($perPage);

        return redirect()->back()->with('status', $result['message']);
    }
    
    public function updateSubscriptionById(Request $request)
    {
        $data = $request->all();

        $result = $this->subscriptionService->updateSubscriptionById($data);

        return redirect()->back()->with('status', $result['message']);
    }

    public function deleteSubscriptionById(Request $request)
    {
        $result = $this->subscriptionService->deleteSubscriptionById($request->id);

        return redirect()->back()->with('status', $result['message']);
    }
}