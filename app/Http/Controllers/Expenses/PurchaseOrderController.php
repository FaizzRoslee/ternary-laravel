<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function showRequest(){
        $page_title = 'Purchase Order Request';
        $page_description = '';
        $page_breadcrumbs = [

        ];

        return view('pages.expenses.purchase-order.request', compact('page_title', 'page_description', 'page_breadcrumbs'));
    }

    public function storeRequest(Request $request){

        dd($request);

    }

    public function generatePDF(){
        return view('template.invoice');


    }
}
