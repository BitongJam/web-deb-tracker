<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $name = 'John Doe';
        $totalDebts = 0;
        $totalOustanding = 300;
        return view('dashboard',[
            'name' => $name,
            'totalDebts' => $totalDebts,
            'totalOutstanding' => $totalOustanding
        ]);
    }
}
