<?php

namespace App\Http\Controllers\Profile;

use App\Enums\AccountType;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountMakeRequest;
use App\Models\Account;
use App\Services\AccountService;

class AccountController extends Controller
{
    private AccountService $service;

    public function __construct(AccountService $service)
    {
        $this->service = $service;
    }

    public function accounts()
    {
        return view('pages.profile.accounts.showAll', [
            'accounts' => auth()->user()->accounts,
        ]);
    }

    public function store(AccountMakeRequest $request)
    {
        $this->service->store($request->validated());

        return redirect()->route('accounts.show');
    }

    public function select(Account $account)
    {
        $expenses = $account->expenses;
        $incomes = $account->incomes;

        return view('pages.profile.accounts.showSelected', [
            'account' => $account,
            'expenses' => $expenses,
            'incomes' => $incomes,
        ]);
    }

    public function delete(Account $account)
    {
        $account->delete();

        return back();
    }

    public function newRecord(Account $account, AccountType $type)
    {
        abort_if($type !== 'income' && $type !== 'expense', 401);

        if ($type === 'income') {
            $userTypes = auth()->user()->incomeTypes;
        } else {
            $userTypes = auth()->user()->expenseTypes;
        }

        return view('pages.profile.accounts.newRecord', [
            'account' => $account,
            'type' => $type,
            'types' => $userTypes,
        ]);
    }
}
