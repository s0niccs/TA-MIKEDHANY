<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller {

    public function index() {
        if ( auth()->user()->usertype !== 'admin' ) {
            return redirect()->route( 'home' )->with( 'message', 'Anda bukan admin' );
        }

        $transactions = Transaction::all();
        return view( 'transaction.index', compact( 'transactions' ) );
    }
}
