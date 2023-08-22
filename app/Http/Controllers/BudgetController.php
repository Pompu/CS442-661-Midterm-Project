<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Event;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index(Request $request){
        $status = $request->input('status', 'ALL');

        if($status === 'ALL'){
            $budgets = Budget::get();;
            $events = Event::get();
        }
        else{
            $budgets = Budget::where('status', $status)->get();
        }

        return view('budgets.index', [
            'budgets' => $budgets,
            'events' => $events
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

        return redirect()->route('budgets.index');
    }
}
