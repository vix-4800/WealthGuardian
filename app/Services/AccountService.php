<?php

namespace App\Services;

use App\Models\Account;

class AccountService
{
    public function store(array $accountData)
    {
        Account::create([
            'user_id' => auth()->id(),
            'name' => $accountData['name'],
            'balance' => $accountData['balance'],
            'type' => $accountData['type'],
        ]);
    }
}
