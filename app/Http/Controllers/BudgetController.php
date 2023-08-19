<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index($status = 'inprogress'){
        $budgets = Budget::where('status', $status)->get();
        return view('budgets.index', [
            'budgets' => $budgets
        ]);
    }

    public function show(Budget $budget)
    {
        return view('budget.show', [
            'budget' => $budget
        ]);
    }
}
