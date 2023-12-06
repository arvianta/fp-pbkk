<?php

namespace App\Http\Service;

use App\Http\Repository\SubscriptionRepository;

class SubscriptionService
{
    protected $subscriptionRepository;

    public function __construct(SubscriptionRepository $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }

    public function createSubscription($data)
    {
        $subscription = $this->subscriptionRepository->createSubscription($data);

        if($subscription) {
            return ['status' => 'success', 'message' => 'Subscription created successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Subscription creation failed'];
        }
    }

    public function deleteSubscriptionById($id)
    {
        $subscription = $this->subscriptionRepository->deleteSubscriptionById($id);

        if($subscription) {
            return ['status' => 'success', 'message' => 'Subscription deleted successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Subscription deletion failed'];
        }
    }

    public function getAllSubscriptionsWithNamesPaginated($perPage = 10)
    {
        $subscriptions = $this->subscriptionRepository->getAllSubscriptionsWithNamesPaginated($perPage);

        if($subscriptions) {
            return $subscriptions;
        } else {
            return ['status' => 'error', 'message' => 'Subscriptions not found'];
        }
    }

    public function updateSubscriptionById($data)
    {
        $subscription = $this->subscriptionRepository->updateSubscriptionById($data);

        if($subscription) {
            return ['status' => 'success', 'message' => 'Subscription updated successfully'];
        } else {
            return ['status' => 'error', 'message' => 'Subscription update failed'];
        }
    }
}