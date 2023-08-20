<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index($status = ""){
        if($status == null){
            $budgets = Budget::get();
        }
        else{
            $budgets = Budget::where('status', $status)->get();
        }
        return view('budgets.index', [
            'budgets' => $budgets
        ]);
    }

    public function show(Budget $budget)
    {
        return view('budgets.show', [
            'budget' => $budget
        ]);
    }

    public function updateStatus(Request $request, Budget $budget)
    {
        $budget->status = 'completed';
        $budget->save();

        return redirect()->route('budgets.show', ['budget' => $budget]);
    }
}
