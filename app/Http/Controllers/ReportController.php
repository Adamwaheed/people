<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function sales(Request $request){

       
        if($request->has('search')){
            $reports = \App\Models\EmployeeSales::where('product_name','like',$request->search.'%')->get();
        }else{
            $reports = \App\Models\EmployeeSales::all();
        }

       

        return view('report.sales')->with(compact('reports'));
        
    }

    public function salesSingle($id){
      

        $report = \App\Models\EmployeeSales::find($id);
    

        return view('report.sales-single')->with(compact('report'));
        
    }
}
