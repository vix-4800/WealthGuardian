<?php

namespace App\Http\Controllers;

use App\Models\Account;

class ProfileController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $accounts = $user->accounts;

        return view('dashboard', compact('accounts'));
    }

    public function select(int $accountId)
    {
        $account = Account::find($accountId);
        $expenses = $account->expenses;
        $incomes = $account->incomes;

        return view('pages.profile.accounts.view', compact('account', 'expenses', 'incomes'));
    }
    }
}
