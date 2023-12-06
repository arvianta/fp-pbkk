<?php

namespace App\Http\Repository;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class SubscriptionRepository
{
    public function getQuery(): Builder
    {
        return Subscription::query();
    }

    public function createSubscription($data)
    {
        $subscription = new Subscription();
        $subscription->user_id = $data['user_id'];
        $subscription->payment_id = $data['payment_id'];
        $subscription->personal_trainer_id = $data['personal_trainer_id'];
        $subscription->membership_id = $data['membership_id'];
        $subscription->save();
    }

    public function deleteSubscriptionById($id)
    {
        $subscription = Subscription::find($id);
        if ($subscription) {
            $subscription->delete();
            return true;
        }
    }

    public function getAllSubscriptionsWithNamesPaginated($perPage = 10)
    {
        return DB::table('subscriptions')
            ->join('users', 'subscriptions.user_id', '=', 'users.id')
            ->join('personal_trainers', 'subscriptions.personal_trainer_id', '=', 'personal_trainers.id')
            ->select(
                'subscriptions.*',
                'users.name as user_name',
                'personal_trainers.name as personal_trainer_name'
            )
            ->paginate($perPage);
    }

    public function updateSubscriptionById($data)
    {
        $subscription = Subscription::find($data['id']);
        if ($subscription) {
            $subscription->user_id = $data['user_id'];
            $subscription->payment_id = $data['payment_id'];
            $subscription->personal_trainer_id = $data['personal_trainer_id'];
            $subscription->membership_id = $data['membership_id'];
            $subscription->save();
            return true;
        }
    }
}