<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountMakeRequest;
use App\Models\Account;

class ProfileController extends Controller
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
                'profit_rate' => ($incomes !== 0) ? round(($balance - $account->balance) / $account->balance  * 100, 2) : 0,
            ];
        }

        return view('pages.profile.dashboard', [
            'accounts' => $income_array,
        ]);
    }

    public function accounts()
    {
        return view('pages.profile.accounts.accounts', [
            'accounts' => auth()->user()->accounts,
        ]);
    }

    public function add()
    {
        return view('pages.profile.accounts.add');
    }

    public function store(AccountMakeRequest $request)
    {
        Account::create([
            'user_id' => auth()->id(),
            'name' => $request['name'],
            'balance' => $request['balance'],
        ]);

        return redirect()->route('accounts.show');
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
