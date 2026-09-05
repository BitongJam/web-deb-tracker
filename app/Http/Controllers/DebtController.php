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

    $validated = $request->validate([
        'name' => 'required|min:3',
        'phone' => 'required|min:10|max:15',
        'notes' => 'nullable',
    ],[
        'name.required' => 'Please enter the Debtor\'s name.',
        'name.min' => 'The Debtor\'s name must be at least 3 characters.',
        'phone.required' => 'Please enter the Debtor\'s phone number.',
        'phone.min' => 'The Debtor\'s phone number must be at least 10 characters.',
        'phone.max' => 'The Debtor\'s phone number must not exceed 15 characters.',
    ]);
    //    $name = $request->input('name');
    //    $phone = $request->input('phone');
    //    $notes = $request->input('notes');

       Debtor::create($validated);

        return redirect()->route('debts.index');;
    }
}
