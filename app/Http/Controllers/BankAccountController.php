<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    public function index(User $user)
    {
        $userData = $user->load('bankAccounts');
        return view('bank-accounts.index', compact('userData'));
    }

    public function create(User $user)
    {
        $userData = $user;
        return view('bank-accounts.create', compact('userData'));
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        $bankAccount = new BankAccount();
        $bankAccount->bank_name = $request->bank_name;
        $bankAccount->account_number = $request->account_number;
        $bankAccount->user_id = $user->id;
        $bankAccount->status = $request->status;
        $bankAccount->save();

        return redirect()->route('user.bank-accounts.index', $user)->with('success', 'Data rekening berhasil ditambahkan');
    }

    public function edit(User $user, BankAccount $bankAccount)
    {
        return view('bank-accounts.edit', compact('bankAccount', 'user'));
    }

    public function update(Request $request, User $user, BankAccount $bankAccount)
    {
        $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|digits_between:5,20',
            'status' => 'required|in:active,inactive'
        ]);

        $bankAccount->bank_name = $request->input('bank_name');
        $bankAccount->account_number = $request->input('account_number');
        $bankAccount->status = $request->input('status');
        $bankAccount->save();

        return redirect()->route('user.bank-accounts.index', $user)->with('success', 'Data rekening berhasil diubah');
    }

    public function destroy(User $user, BankAccount $bankAccount)
    {
        $bankAccount->delete();
        return redirect()->route('user.bank-accounts.index', $user)->with('success', 'Data rekening berhasil dihapus');
    }
}
