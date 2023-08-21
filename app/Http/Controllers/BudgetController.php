<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index(Request $request){
        $status = $request->input('status', 'ALL');

        if($status === 'ALL'){
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
