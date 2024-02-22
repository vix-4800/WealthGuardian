<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountMakeRequest;
use App\Models\Account;

class AccountController extends Controller
{
    public function accounts()
    {
        return view('pages.profile.accounts.showAll', [
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
            'type' => $request['type'],
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

    public function delete(Account $account)
    {
        $account->delete();

        return back();
    }
}
