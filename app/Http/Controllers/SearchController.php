<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;
use App\Doctor;
use DB;
class SearchController extends Controller
{
    public function index()
    {
        $medicine = DB::table('doctors')
        ->distinct()->get(['sub_category']);
        
        return view('pages.search.index',['medicine'=>$medicine]);
    }

    public function result(Request $request)
    {
        $doctor = new Doctor();
        $q = $request->q;
        $name = $request->name;
        $result = DB::table('doctors')->where('sub_category',$q)
        ->orWhere('name',$name)->get();
        return view('pages.search.result',['result'=>$result]);
        
    }
}
