<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function showGenerate(){
        $page_title = 'Generate Purchase Order';
        $page_description = '';
        $page_breadcrumbs = [

        ];

        return view('pages.expenses.purchase-order.generate', compact('page_title', 'page_description', 'page_breadcrumbs'));
    }

    public function generatePDF(){
        return view('template.invoice');


    }
}
