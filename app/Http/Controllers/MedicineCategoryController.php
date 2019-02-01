<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;

class MedicineCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::all();
        return view('admin.medicine.index',['medicines'=> $medicines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function savePost($request,$imageUrl)
    {
    $medicine = new Medicine();
    $medicine->name = $request->name;
    $medicine->description = $request->description;
    $medicine->feature_image = $imageUrl;
    $medicine->status = $request->status;
    $medicine->save();   
    }
   
public function store(Request $request)
{

    $featureImage = $request->file('feature_image');
    $name = $featureImage->getClientOriginalName();
    $uploadPath = 'public/feature_img/';
    $featureImage->move($uploadPath, $name);
    $imageUrl = $uploadPath . $name;
    $this->savePost($request, $imageUrl);
    return redirect()->back()->with('success', 'Medicine Created Successfully');   
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
