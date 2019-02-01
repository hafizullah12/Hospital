<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addmission;
use DB;


class AddmissionController extends Controller
{
    public function index()
    {
        return view('admin.addmission.create');
    }

    public function store(Request $request)

    {
        $ammission = new Addmission();
        $ammission->name = $request->name;
        $ammission->address = $request->address;
        $ammission->phone = $request->phone;
        $ammission->info = $request->info;
        $ammission->problem = $request->problem;
        $ammission->room_no = $request->room_no;
        $ammission->consultant = $request->consultant;
        $ammission->save();
        return redirect()->back()->with('success', 'Patient Addmission Successfully'); 
    }
    public function showAll()
    {
        $patients = Addmission::all();
       // dd($patients);
        return view('admin.addmission.index',['patients'=>$patients]);
    }

    public function search(Request $request)
    {
        $q = $request->name;
        $result = Addmission::
        where('name','like', '%' .$q. '%')
        ->get();
        return view('admin.addmission.result',['result'=>$result]);
    }

    public function edit($id)
    {
        $patient = Addmission::find($id);
        return view('admin.addmission.edit',['patient'=> $patient]);
    }

    public function update(Request $request,$id)
    {
        $ammission = new Addmission();
        $ammission->name = $request->name;
        $ammission->address = $request->address;
        $ammission->phone = $request->phone;
        $ammission->info = $request->info;
        $ammission->problem = $request->problem;
        $ammission->room_no = $request->room_no;
        $ammission->consultant = $request->consultant;
        $ammission->save();
        return redirect()->back()->with('success', 'Patient Addmission Update Successfully'); 
    }
    public function destroy($id)
    {
        $patient = Addmission::find($id);
        $patient->delete();
        return redirect()->back()->with('success', 'Patient Delete Successfully');    
    }
}
