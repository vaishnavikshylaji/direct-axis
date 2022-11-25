<?php

namespace App\Http\Controllers;

use App\DataTables\SalesDataTable;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $customersWithNoSales = User::whereDoesntHave('sales')
            ->get();

//        $customersWithSale = DB::table('users')
//            ->select('users.name', 'users.email')
//            ->join('sales', 'users.id', '=', 'sales.user_id')
//            ->get();

        $customersWithSales = User::select('name', 'email')
            ->whereHas('sales')
            ->get();

        $usersWithSaleCounts = DB::table('users')
            ->join('sales', 'sales.user_id', '=', 'users.id')
            ->select('users.name', DB::raw('count(*) as total'))
            ->groupBy('sales.user_id')
            ->get();

        $productWithSaleCounts = DB::table('products')
            ->join('sales', 'sales.product_id', '=', 'products.id')
            ->select('products.name', DB::raw('count(*) as total'))
            ->groupBy('sales.product_id')
            ->get();

        return view('pages.reports.index', compact(
            'customersWithNoSales',
            'customersWithSales',
            'usersWithSaleCounts', 'productWithSaleCounts')
        );
    }
}
