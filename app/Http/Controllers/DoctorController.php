<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        //dd($doctors);
        return view('admin.doctor.index',['doctors'=>$doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

   
    protected function savePost($request,$imageUrl)
    {
       
        $doctor  = new Doctor();
        $doctor->name = $request->name;
        $doctor->description = $request->description;
        $doctor->category = $request->category;
        $doctor->sub_category = $request->sub_category;
        $doctor->designation = $request->designation;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->address = $request->address;
        $doctor->feature_image = $imageUrl;
        $doctor->status = $request->status;
        $doctor->save();
    }

public function store(Request $request)
{
    $featureImage = $request->file('feature_image');
    $name = $featureImage->getClientOriginalName();
    $uploadPath = 'public/feature_img/';
    $featureImage->move($uploadPath, $name);
    $imageUrl = $uploadPath . $name;
    $this->savePost($request, $imageUrl);
    return redirect()->back()->with('success', 'Doctor Added Successfully');   
    

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
