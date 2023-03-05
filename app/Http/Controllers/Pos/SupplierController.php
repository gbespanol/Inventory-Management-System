<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;


class SupplierController extends Controller
{
    //
    public function SupplierAll(){
        // $supplier = Supplier::all();
        $suppliers = Supplier::latest()->get();
        return view('backend.supplier.supplier_all',compact('suppliers'));
    }// End Method

    public function SupplierAdd(){
        // $supplier = Supplier::all();
        //$suppliers = Supplier::latest()->get();
        return view('backend.supplier.supplier_add');
    }// End Method
}
