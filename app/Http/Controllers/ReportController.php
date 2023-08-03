<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $salary = Transaksi::whereHas('coa', function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('name', 'salary');
            });
        })->get();

        $otherIncome = Transaksi::whereHas('coa', function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('name', 'other income');
            });
        })->get();

        $familyExpanse = Transaksi::whereHas('coa', function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('name', 'Family Expense');
            });
        })->get();

        $transportExpense = Transaksi::whereHas('coa', function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('name', 'Transport Expense');
            });
        })->get();

        $mealExpense = Transaksi::whereHas('coa', function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('name', 'Meal Expense');
            });
        })->get();
        
        return view('report.index')->with([
            'salary' => $salary,
            'otherIncome' => $otherIncome,
            'familyExpanse' => $familyExpanse,
            'transportExpense' => $transportExpense,
            'mealExpense' => $mealExpense,
        ]);
    }
}
