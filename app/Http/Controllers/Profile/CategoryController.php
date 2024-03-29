<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\IncomeCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add(Request $request, Account $account, string $type)
    {
        if ($type === 'income') {
            IncomeCategory::create([
                'user_id' => auth()->id(),
                'name' => $request['name'],
            ]);
        }

        return redirect()->back();
    }
}
