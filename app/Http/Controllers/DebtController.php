<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Debtor;

class DebtController extends Controller
{
    //
    public function index()
    {
//         Debtor::create([
//     'name' => 'John Doe',
//     'phone' => '09171234567',
//     'notes' => 'First debtor',
// ]);
        $debtors = Debtor::all();

        // return 'My Debts';
        return view('debtors',[
            'debtors' => $debtors
        ]);
    }

    public function create()
    {
        return view('debtors.create');
    }

    public function store(Request $request)
    {
       $name = $request->input('name');
       $phone = $request->input('phone');
       $notes = $request->input('notes');

       Debtor::create([
            'name' => $name,
            'phone' => $phone,
            'notes' => $notes
        ]);

        return redirect('/debts');
    }
}
