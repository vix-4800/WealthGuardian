<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountMakeRequest;
use App\Models\Account;
use App\Services\AccountService;

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
        $validated = $request->validated();

        (new AccountService)->store($validated);

        return redirect()->route('accounts.show');
    }

    public function select(Account $account)
    {
        $expenses = $account->expenses;
        $incomes = $account->incomes;

        return view('pages.profile.accounts.showSelected', compact('account', 'expenses', 'incomes'));
    }

    public function delete(Account $account)
    {
        $account->delete();

        return back();
    }
}
