<?php

namespace App\Http\Controllers;

use App\DataTables\SalesDataTable;
use App\Models\Product;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SaleController extends Controller
{
    public function index(SalesDataTable $dataTable)
    {
        return $dataTable->render('pages.sales.index');
    }

    public function create()
    {
        $users = User::cursor();
        $products = Product::cursor();

        return view('pages.sales.create', compact('users', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
        ]);

        $product = Product::findOrFail($request->product_id);

        $sales = Sale::latest()->first();
        $invNo = 'INV-001';
        if (!$sales) {
            $invNo = $invNo;
        }
        else {
            $slice = Str::after($sales->invoice_number, 'INV-');
            $number = (int)$slice;
            $number = $number + 1;
            $value =  str_pad($number,3,"0",STR_PAD_LEFT);
            $invNo = 'INV-'.$value;
        }

        $sale = new Sale();
        $sale->user_id = $request->user_id;
        $sale->invoice_number = $invNo;
        $sale->product_id = $request->product_id;
        $sale->quantity = $request->quantity;
        $sale->price = $product->price;
        $sale->save();

        toastr()->success('Sale created successfully!');

        return redirect()->route('sales.index');
    }

}
