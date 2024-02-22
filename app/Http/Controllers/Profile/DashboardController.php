<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $accounts = auth()->user()->accounts;

        $income_array = [];

        foreach ($accounts as $account) {
            $incomes = array_sum(array_column($account->incomes()->get('amount')->toArray(), 'amount'));
            $expenses = array_sum(array_column($account->expenses()->get('amount')->toArray(), 'amount'));
            $balance = $incomes + $account->balance - $expenses;

            $income_array[] = [
                'id' => $account->id,
                'name' => $account->name,
                'balance' => $balance,
                'incomes' => $incomes,
                'expenses' => $expenses,
                'profit_rate' => ($incomes !== 0) ? round(($balance - $account->balance) / $account->balance * 100, 2) : 0,
            ];
        }

        return view('pages.profile.dashboard', [
            'accounts' => $income_array,
        ]);
    }
}
