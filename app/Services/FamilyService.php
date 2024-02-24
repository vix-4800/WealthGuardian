<?php

namespace App\Services;

use App\Models\User;

class FamilyService
{
    public function getFamilyMembers(): ?array
    {
        $family = auth()->user()->family;

        if (! $family) {
            return null;
        }

        $members = $family->members()
            ->with('accounts')
            ->get(['id', 'name', 'email', 'subscription_plan_id']);

        $membersResult = [];

        foreach ($members as $member) {
            $accounts = $member->accounts()
                ->with('expenses', 'incomes')
                ->get(['id', 'balance'])
                ->toArray();

            $memberIncome = 0;
            $memberExpense = 0;

            foreach ($accounts as $account) {
                $memberIncome += array_sum(array_column($account['incomes'], 'amount'));
                $memberExpense += array_sum(array_column($account['expenses'], 'amount'));
            }

            $membersResult[] = [
                'id' => $member->id,
                'name' => $member->name,
                'email' => $member->email,
                'income' => $memberIncome,
                'expenses' => $memberExpense,
                'subscription' => $member->subscription_plan_id,
            ];
        }

        return $membersResult;
    }

    public function kickMember(User $member)
    {
        $member->family_id = null;
        $member->save();
    }
}
