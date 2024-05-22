<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\WalletTransaction;

class DashboardController extends Controller
{
    public function wallet(){
        $user = Auth::user();

        $wallet_transactions = WalletTransaction::where('user_id', $user->id)
        ->orderByDesc('id')
        ->paginate(10);

        return view('dashboard.wallet', compact('wallet_transactions'));

    }
}
